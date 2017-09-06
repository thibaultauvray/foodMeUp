<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;

/**
 * Class DefaultController
 * @package ApiBundle\Controller
 * Prefix URL /api/
 */
class DefaultController extends Controller
{
    /**
     * @Rest\View()
     * @Get("/", name="homeage")
     */
    public function indexAction()
    {
        return new JsonResponse(['message' => 'Hello! You can go on /documentation for documentation'], Response::HTTP_OK);
    }
}
