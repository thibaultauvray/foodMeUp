<?php

namespace ApiBundle\Controller;
use ApiBundle\Service\FileUploader;
use PageBundle\Entity\Image;

use PageBundle\Form\ImageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use PageBundle\Entity\Ingredients;
use FOS\RestBundle\View\ViewHandler;
use Swagger\Annotations as SWG;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Nelmio\ApiDocBundle\Annotation\Model;
use FOS\RestBundle\View\View;
use ApiBundle\Service\ApiUploadedFile;

class IngredientsController extends Controller
{

    /**
     * @Rest\View()
     * @Get("/ingredients", name="ingredients")
     */

    public function getIngredients(Request $request)
    {
        $ingredients = $this->get('doctrine.orm.entity_manager')
                ->getRepository('PageBundle:Ingredients')
                ->findAll();
        if (empty($ingredients))
        {
            return new JsonResponse(['message' => 'No ingredients on DB'], Response::HTTP_NOT_FOUND);
        }
        return $ingredients;



    }

    /**
     * @Rest\View
     * @Get("/ingredients/{itemPerPage}/{nbPage}", name="allIngredients")
     * @ApiDoc(
     *      description="Récupère la liste des ingredients",
     *      statusCodes = {
     *        200 = "Suceed",
     *        404 = "Missing parameters"
     *      },
     *      output= { "class"="PageBundle\Entity\Ingredients", "collection"=true, "groups"={"ingredients"}
     *     }
     * )
     * @QueryParam(name="itemPerPage", requirements="\d+", default="", description="Index de début de la pagination")
     * @QueryParam(name="nbPage", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     *
     */

    public function getAllIngredients(Request $request, int $itemPerPage = null, int $nbPage = null)
    {
        if ($itemPerPage && $nbPage || ($itemPerPage && $nbPage === 0))
        {
            $ingredients = $this->get('doctrine.orm.entity_manager')
                ->getRepository('PageBundle:Ingredients')
                ->findPaginate($itemPerPage, $nbPage);
            return $ingredients;

        }
        else
        {
            return new JsonResponse(['message' => 'Missing one parameters'], Response::HTTP_NOT_FOUND);
        }

    }

    /**
     * @Rest\View()
     * @Get("/ingredient/{id}")
     * @ApiDoc(
     *      description="Recuperer un ingredient par rapport a son id",
     *      statusCodes = {
     *        200 = "Suceed",
     *        404 = "Not found"
     *      },
     *      output= { "class"="PageBundle\Entity\Ingredients", "collection"=true
     *     }
     * )
     * @QueryParam(name="id", default="", description="ID de l'ingredient")
     */
    public function getIngredient(Request $request)
    {
        $ingredient = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PageBundle:Ingredients')
            ->find($request->get('id'));

        if (empty($ingredient))
        {
            return new JsonResponse(['message' => 'Ingredient not found'], Response::HTTP_NOT_FOUND);
        }
        return $ingredient;
    }

    /**
     * @Rest\View()
     * @Get("/countIngredients", name="nbIngredient")
     * @ApiDoc(
     *      description="Recupere le nombre d'ingredients dans la DB",
     *      statusCodes = {
     *        200 = "Suceed"
     *      }
     *)
     */
    public function getCountIngredients(Request $request)
    {
        $count = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PageBundle:Ingredients')
            ->getNbIngredients();
        return $count;

    }
    /**
     * @Rest\View()
     * @Get("/search/ingredient/{name}", name="searchIngredients")
     * @ApiDoc(
     *      description="Return all ingredients with the parameters name",
     *      statusCodes = {
     *        200 = "Suceed",
     *        404 = "No resultat"
     *      },
     * )
     *
     * @QueryParam(name="name", requirements="\d+", default="", description="Ingredients a rechercher")
     */
    public function getIngredientNameAction(Request $request)
    {
        $name = strtolower(trim($request->get('name')));
        $exact = false;
        if ($name[0] == "\"" && $name[strlen($name)-1] == "\"")
        {
            $name = trim($name, '"');
            $exact = true;
        }

        $ingredient = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PageBundle:Ingredients')
            ->searchByName($name, $exact);
        if ($exact)
            return $ingredient;

        # Order by levenshtein distance - Can be optimized
        usort($ingredient, function ($a, $b) use ($name)
        {
            $lev_a = levenshtein($name, strtolower($a->getName()));
            $lev_b = levenshtein($name, strtolower($b->getName()));
            return $lev_a == $lev_b ? 0 : ($lev_a > $lev_b ? 1 : -1);
        });

        # Order if start by
        usort($ingredient, function ($a, $b) use ($name)
        {
            $aName = stripos($a->getName(), $name);
            $bName = stripos($b->getName(), $name);
            return $aName == $bName ? 0 : $aName < $bName ? -1 : 1;
        });

        if (empty($ingredient))
        {
            return new JsonResponse(['message' => 'Ingredient not found'], Response::HTTP_NOT_FOUND);
       }
        return $ingredient;
    }

    /**
     * @Rest\View()
     * @Post("/images/{id}", name="updateImage")
     * @ApiDoc(
     *      description="Update image of ingredient",
     *      parameters={{"name"="url", "dataType"="string", "required"=true}},
     *      statusCodes = {
     *        200 = "Suceed",
     *        404 = "Image non trouvee | Erreur lors de l'upload"
     *      }
     * )
     * @QueryParam(name="id", requirements="\d+", default="", description="ID de l'image")
     */
    public function patchImage(Request $request)
    {
        $ingredient = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PageBundle:Ingredients')
            ->find($request->get('id'));

        if(empty($ingredient))
            return new JsonResponse(['message' => 'Ingredient not found'], Response::HTTP_NOT_FOUND);

        // DELETE IMAGE ON SERVER AND DB WHEN UPDATE TODO
        if ($request->request->has('url'))
        {
            $file = new ApiUploadedFile($request->request->get('url'), $this->getParameter('image_directory'));
            $data['url'] = $file;
        }
        else
        {
            return new JsonResponse(['message' => 'Missing URL parameter with in body { url : base64_jpg } '], Response::HTTP_NOT_FOUND);
        }
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->submit($data);

        if ($form->isValid()) {
            $img = $image->getUrl();
            $fileUploader = $this->get('api.file_uploader');
            $fileName = $fileUploader->upload($img);
            $image->setUrl($fileName);
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($image);
            $ingredient->setImage($image);
            $em->persist($ingredient);
            $em->flush();
            return $ingredient;
        }
        else
        {
            return $form;
        }
        return new JsonResponse(['message' => 'Unknown error'], Response::HTTP_NOT_FOUND);
    }

}