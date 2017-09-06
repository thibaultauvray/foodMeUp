<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\IngredientsRepository")
 */
class Ingredients
{
    /**
     * Identifiant unique du lieu
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var ORIGGPCD
     *
     * @ORM\Column(name="codeInterneFamille", type="string", length=255, nullable=true)
     */
    private $codeInterneFamille;


    /**
     * @var ORIGGPFR
     *
     * @ORM\Column(name="famille", type="string", length=255, nullable=true)
     */
    private $famille;


    /**
     * @var ORIGFDCD
     *
     * @ORM\Column(name="codeInterne", type="string", length=255, nullable=true)
     */
    private $codeInterne;


    /**
     * @var ORIGFDNM
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


    /**
     * @var Energie, Règlement UE N� 1169/2011 (kJ/100g)
     *
     * @ORM\Column(name="energie", type="string", length=255, nullable=true)
     */
    private $energie;


    /**
     * @var Energie, Règlement UE N� 1169/2011 (kcal/100g)
     *
     * @ORM\Column(name="energie2", type="string", length=255, nullable=true)
     */
    private $energie2;


    /**
     * @var Energie, N x facteur Jones, avec fibres  (kJ/100g)
     *
     * @ORM\Column(name="energie3", type="string", length=255, nullable=true)
     */
    private $energie3;


    /**
     * @var Energie, N x facteur Jones, avec fibres  (kcal/100g)
     *
     * @ORM\Column(name="energie4", type="string", length=255, nullable=true)
     */
    private $energie4;


    /**
     * @var Eau (g/100g)
     *
     * @ORM\Column(name="eau", type="string", length=255, nullable=true)
     */
    private $eau;


    /**
     * @var Protéines (g/100g)
     *
     * @ORM\Column(name="proteines", type="string", length=255, nullable=true)
     */
    private $proteines;


    /**
     * @var Protéines brutes, N x 6.25 (g/100g)
     *
     * @ORM\Column(name="proteinesBrute", type="string", length=255, nullable=true)
     */
    private $proteinesBrute;


    /**
     * @var Glucides (g/100g)
     *
     * @ORM\Column(name="glucides", type="string", length=255, nullable=true)
     */
    private $glucides;


    /**
     * @var Lipides (g/100g)
     *
     * @ORM\Column(name="lipides", type="string", length=255, nullable=true)
     */
    private $lipides;


    /**
     * @var Sucres (g/100g)
     *
     * @ORM\Column(name="sucres", type="string", length=255, nullable=true)
     */
    private $sucres;


    /**
     * @var Amidon (g/100g)
     *
     * @ORM\Column(name="amidon", type="string", length=255, nullable=true)
     */
    private $amidon;


    /**
     * @var Fibres alimentaires (g/100g)
     *
     * @ORM\Column(name="fibres", type="string", length=255, nullable=true)
     */
    private $fibres;


    /**
     * @var Polyols totaux (g/100g)
     *
     * @ORM\Column(name="polyols", type="string", length=255, nullable=true)
     */
    private $polyols;


    /**
     * @var Cendres (g/100g)
     *
     * @ORM\Column(name="cendres", type="string", length=255, nullable=true)
     */
    private $cendres;


    /**
     * @var Alcool (g/100g)
     *
     * @ORM\Column(name="alcool", type="string", length=255, nullable=true)
     */
    private $alcool;


    /**
     * @var Acides organiques (g/100g)
     *
     * @ORM\Column(name="acides", type="string", length=255, nullable=true)
     */
    private $acides;


    /**
     * @var AG saturés (g/100g)
     *
     * @ORM\Column(name="agSatures", type="string", length=255, nullable=true)
     */
    private $agSatures;


    /**
     * @var AG monoinsaturés (g/100g)
     *
     * @ORM\Column(name="agMono", type="string", length=255, nullable=true)
     */
    private $agMono;


    /**
     * @var AG polyinsaturés (g/100g)
     *
     * @ORM\Column(name="agPoly", type="string", length=255, nullable=true)
     */
    private $agPoly;


    /**
     * @var AG 4:0, butyrique (g/100g)
     *
     * @ORM\Column(name="ag4", type="string", length=255, nullable=true)
     */
    private $ag4;


    /**
     * @var AG 6:0, caproïque (g/100g)
     *
     * @ORM\Column(name="ag6", type="string", length=255, nullable=true)
     */
    private $ag6;


    /**
     * @var AG 8:0, caprylique (g/100g)
     *
     * @ORM\Column(name="ag8", type="string", length=255, nullable=true)
     */
    private $ag8;


    /**
     * @var AG 10:0, caprique (g/100g)
     *
     * @ORM\Column(name="ag10", type="string", length=255, nullable=true)
     */
    private $ag10;


    /**
     * @var AG 12:0, laurique (g/100g)
     *
     * @ORM\Column(name="ag12", type="string", length=255, nullable=true)
     */
    private $ag12;


    /**
     * @var AG 14:0, myristique (g/100g)
     *
     * @ORM\Column(name="ag14", type="string", length=255, nullable=true)
     */
    private $ag14;


    /**
     * @var AG 16:0, palmitique (g/100g)
     *
     * @ORM\Column(name="ag16", type="string", length=255, nullable=true)
     */
    private $ag16;


    /**
     * @var AG 18:0, stéarique (g/100g)
     *
     * @ORM\Column(name="ag18", type="string", length=255, nullable=true)
     */
    private $ag18;


    /**
     * @var AG 18:1 9c (n-9), oléique (g/100g)
     *
     * @ORM\Column(name="ag181", type="string", length=255, nullable=true)
     */
    private $ag181;


    /**
     * @var AG 18:2 9c,12c (n-6), linoléique (g/100g)
     *
     * @ORM\Column(name="ag182", type="string", length=255, nullable=true)
     */
    private $ag182;


    /**
     * @var AG 18:3 c9,c12,c15 (n-3), alpha-linoléique (g/100g)
     *
     * @ORM\Column(name="ag183", type="string", length=255, nullable=true)
     */
    private $ag183;


    /**
     * @var AG 20:4 5c,8c,11c,14c (n-6), arachidonique (g/100g)
     *
     * @ORM\Column(name="ag204", type="string", length=255, nullable=true)
     */
    private $ag204;


    /**
     * @var AG 20:5 5c,8c,11c,14c,17c (n-3) EPA (g/100g)
     *
     * @ORM\Column(name="ag205", type="string", length=255, nullable=true)
     */
    private $ag205;


    /**
     * @var AG 22:6 4c,7c,10c,13c,16c,19c (n-3) DHA (g/100g)
     *
     * @ORM\Column(name="ag226", type="string", length=255, nullable=true)
     */
    private $ag226;


    /**
     * @var Cholestérol (mg/100g)
     *
     * @ORM\Column(name="cholesterol", type="string", length=255, nullable=true)
     */
    private $cholesterol;


    /**
     * @var Sel chlorure de sodium (g/100g)
     *
     * @ORM\Column(name="sel", type="string", length=255, nullable=true)
     */
    private $sel;


    /**
     * @var Calcium (mg/100g)
     *
     * @ORM\Column(name="calcium", type="string", length=255, nullable=true)
     */
    private $calcium;


    /**
     * @var Chlorure (mg/100g)
     *
     * @ORM\Column(name="chlorure", type="string", length=255, nullable=true)
     */
    private $chlorure;


    /**
     * @var Cuivre (mg/100g)
     *
     * @ORM\Column(name="cuivre", type="string", length=255, nullable=true)
     */
    private $cuivre;


    /**
     * @var Fer (mg/100g)
     *
     * @ORM\Column(name="fer", type="string", length=255, nullable=true)
     */
    private $fer;


    /**
     * @var Iode (�g/100g)
     *
     * @ORM\Column(name="iode", type="string", length=255, nullable=true)
     */
    private $iode;


    /**
     * @var Magnésium (mg/100g)
     *
     * @ORM\Column(name="magnesium", type="string", length=255, nullable=true)
     */
    private $magnesium;


    /**
     * @var Manganèse (mg/100g)
     *
     * @ORM\Column(name="manganese", type="string", length=255, nullable=true)
     */
    private $manganese;


    /**
     * @var Phosphore (mg/100g)
     *
     * @ORM\Column(name="phosphore", type="string", length=255, nullable=true)
     */
    private $phosphore;


    /**
     * @var Potassium (mg/100g)
     *
     * @ORM\Column(name="potassium", type="string", length=255, nullable=true)
     */
    private $potassium;


    /**
     * @var S�l�nium (�g/100g)
     *
     * @ORM\Column(name="solonium", type="string", length=255, nullable=true)
     */
    private $solonium;


    /**
     * @var Sodium (mg/100g)
     *
     * @ORM\Column(name="sodium", type="string", length=255, nullable=true)
     */
    private $sodium;


    /**
     * @var Zinc (mg/100g)
     *
     * @ORM\Column(name="zinc", type="string", length=255, nullable=true)
     */
    private $zinc;


    /**
     * @var R�tinol (�g/100g)
     *
     * @ORM\Column(name="retinol", type="string", length=255, nullable=true)
     */
    private $retinol;


    /**
     * @var Beta-Carotène (µg/100g)
     *
     * @ORM\Column(name="betaCarotine", type="string", length=255, nullable=true)
     */
    private $betaCarotine;


    /**
     * @var Vitamine D (�g/100g)
     *
     * @ORM\Column(name="vitD", type="string", length=255, nullable=true)
     */
    private $vitD;


    /**
     * @var Vitamine E (mg/100g)
     *
     * @ORM\Column(name="vitE", type="string", length=255, nullable=true)
     */
    private $vitE;


    /**
     * @var Vitamine K1 (�g/100g)
     *
     * @ORM\Column(name="vitK1", type="string", length=255, nullable=true)
     */
    private $vitK1;


    /**
     * @var Vitamine K2 (�g/100g)
     *
     * @ORM\Column(name="vitK2", type="string", length=255, nullable=true)
     */
    private $vitK2;


    /**
     * @var Vitamine C (mg/100g)
     *
     * @ORM\Column(name="vitC", type="string", length=255, nullable=true)
     */
    private $vitC;


    /**
     * @var Vitamine B1 ou Thiamine (mg/100g)
     *
     * @ORM\Column(name="vitB1", type="string", length=255, nullable=true)
     */
    private $vitB1;


    /**
     * @var Vitamine B2 ou Riboflavine (mg/100g)
     *
     * @ORM\Column(name="bitB2", type="string", length=255, nullable=true)
     */
    private $bitB2;


    /**
     * @var Vitamine B3 ou PP ou Niacine (mg/100g)
     *
     * @ORM\Column(name="bitB3", type="string", length=255, nullable=true)
     */
    private $bitB3;


    /**
     * @var Vitamine B5 ou Acide pantoth�nique (mg/100g)
     *
     * @ORM\Column(name="vitB5", type="string", length=255, nullable=true)
     */
    private $vitB5;


    /**
     * @var Vitamine B6 (mg/100g)
     *
     * @ORM\Column(name="vitB6", type="string", length=255, nullable=true)
     */
    private $vitB6;


    /**
     * @var Vitamine B9 ou Folates totaux (�g/100g)
     *
     * @ORM\Column(name="vitB9", type="string", length=255, nullable=true)
     */
    private $vitB9;


    /**
     * @var Vitamine B12 (µg/100g)
     *
     * @ORM\Column(name="bitB12", type="string", length=255, nullable=true)
     */
    private $bitB12;

    /**
     * @var imageProfil
     *
     * @ORM\OneToOne(targetEntity="PageBundle\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @return imageProfil
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param imageProfil $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeInterneFamille
     *
     * @param string $codeInterneFamille
     *
     * @return Ingredients
     */
    public function setCodeInterneFamille($codeInterneFamille)
    {
        $this->codeInterneFamille = $codeInterneFamille;

        return $this;
    }

    /**
     * Get codeInterneFamille
     *
     * @return string
     */
    public function getCodeInterneFamille()
    {
        return $this->codeInterneFamille;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Ingredients
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set codeInterne
     *
     * @param string $codeInterne
     *
     * @return Ingredients
     */
    public function setCodeInterne($codeInterne)
    {
        $this->codeInterne = $codeInterne;

        return $this;
    }

    /**
     * Get codeInterne
     *
     * @return string
     */
    public function getCodeInterne()
    {
        return $this->codeInterne;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Ingredients
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set energie
     *
     * @param string $energie
     *
     * @return Ingredients
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return string
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set energie2
     *
     * @param string $energie2
     *
     * @return Ingredients
     */
    public function setEnergie2($energie2)
    {
        $this->energie2 = $energie2;

        return $this;
    }

    /**
     * Get energie2
     *
     * @return string
     */
    public function getEnergie2()
    {
        return $this->energie2;
    }

    /**
     * Set energie3
     *
     * @param string $energie3
     *
     * @return Ingredients
     */
    public function setEnergie3($energie3)
    {
        $this->energie3 = $energie3;

        return $this;
    }

    /**
     * Get energie3
     *
     * @return string
     */
    public function getEnergie3()
    {
        return $this->energie3;
    }

    /**
     * Set energie4
     *
     * @param string $energie4
     *
     * @return Ingredients
     */
    public function setEnergie4($energie4)
    {
        $this->energie4 = $energie4;

        return $this;
    }

    /**
     * Get energie4
     *
     * @return string
     */
    public function getEnergie4()
    {
        return $this->energie4;
    }

    /**
     * Set eau
     *
     * @param string $eau
     *
     * @return Ingredients
     */
    public function setEau($eau)
    {
        $this->eau = $eau;

        return $this;
    }

    /**
     * Get eau
     *
     * @return string
     */
    public function getEau()
    {
        return $this->eau;
    }

    /**
     * Set proteines
     *
     * @param string $proteines
     *
     * @return Ingredients
     */
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines
     *
     * @return string
     */
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set proteinesBrute
     *
     * @param string $proteinesBrute
     *
     * @return Ingredients
     */
    public function setProteinesBrute($proteinesBrute)
    {
        $this->proteinesBrute = $proteinesBrute;

        return $this;
    }

    /**
     * Get proteinesBrute
     *
     * @return string
     */
    public function getProteinesBrute()
    {
        return $this->proteinesBrute;
    }

    /**
     * Set glucides
     *
     * @param string $glucides
     *
     * @return Ingredients
     */
    public function setGlucides($glucides)
    {
        $this->glucides = $glucides;

        return $this;
    }

    /**
     * Get glucides
     *
     * @return string
     */
    public function getGlucides()
    {
        return $this->glucides;
    }

    /**
     * Set lipides
     *
     * @param string $lipides
     *
     * @return Ingredients
     */
    public function setLipides($lipides)
    {
        $this->lipides = $lipides;

        return $this;
    }

    /**
     * Get lipides
     *
     * @return string
     */
    public function getLipides()
    {
        return $this->lipides;
    }

    /**
     * Set sucres
     *
     * @param string $sucres
     *
     * @return Ingredients
     */
    public function setSucres($sucres)
    {
        $this->sucres = $sucres;

        return $this;
    }

    /**
     * Get sucres
     *
     * @return string
     */
    public function getSucres()
    {
        return $this->sucres;
    }

    /**
     * Set amidon
     *
     * @param string $amidon
     *
     * @return Ingredients
     */
    public function setAmidon($amidon)
    {
        $this->amidon = $amidon;

        return $this;
    }

    /**
     * Get amidon
     *
     * @return string
     */
    public function getAmidon()
    {
        return $this->amidon;
    }

    /**
     * Set fibres
     *
     * @param string $fibres
     *
     * @return Ingredients
     */
    public function setFibres($fibres)
    {
        $this->fibres = $fibres;

        return $this;
    }

    /**
     * Get fibres
     *
     * @return string
     */
    public function getFibres()
    {
        return $this->fibres;
    }

    /**
     * Set polyols
     *
     * @param string $polyols
     *
     * @return Ingredients
     */
    public function setPolyols($polyols)
    {
        $this->polyols = $polyols;

        return $this;
    }

    /**
     * Get polyols
     *
     * @return string
     */
    public function getPolyols()
    {
        return $this->polyols;
    }

    /**
     * Set cendres
     *
     * @param string $cendres
     *
     * @return Ingredients
     */
    public function setCendres($cendres)
    {
        $this->cendres = $cendres;

        return $this;
    }

    /**
     * Get cendres
     *
     * @return string
     */
    public function getCendres()
    {
        return $this->cendres;
    }

    /**
     * Set alcool
     *
     * @param string $alcool
     *
     * @return Ingredients
     */
    public function setAlcool($alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return string
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set acides
     *
     * @param string $acides
     *
     * @return Ingredients
     */
    public function setAcides($acides)
    {
        $this->acides = $acides;

        return $this;
    }

    /**
     * Get acides
     *
     * @return string
     */
    public function getAcides()
    {
        return $this->acides;
    }

    /**
     * Set agSatures
     *
     * @param string $agSatures
     *
     * @return Ingredients
     */
    public function setAgSatures($agSatures)
    {
        $this->agSatures = $agSatures;

        return $this;
    }

    /**
     * Get agSatures
     *
     * @return string
     */
    public function getAgSatures()
    {
        return $this->agSatures;
    }

    /**
     * Set agMono
     *
     * @param string $agMono
     *
     * @return Ingredients
     */
    public function setAgMono($agMono)
    {
        $this->agMono = $agMono;

        return $this;
    }

    /**
     * Get agMono
     *
     * @return string
     */
    public function getAgMono()
    {
        return $this->agMono;
    }

    /**
     * Set agPoly
     *
     * @param string $agPoly
     *
     * @return Ingredients
     */
    public function setAgPoly($agPoly)
    {
        $this->agPoly = $agPoly;

        return $this;
    }

    /**
     * Get agPoly
     *
     * @return string
     */
    public function getAgPoly()
    {
        return $this->agPoly;
    }

    /**
     * Set ag4
     *
     * @param string $ag4
     *
     * @return Ingredients
     */
    public function setAg4($ag4)
    {
        $this->ag4 = $ag4;

        return $this;
    }

    /**
     * Get ag4
     *
     * @return string
     */
    public function getAg4()
    {
        return $this->ag4;
    }

    /**
     * Set ag6
     *
     * @param string $ag6
     *
     * @return Ingredients
     */
    public function setAg6($ag6)
    {
        $this->ag6 = $ag6;

        return $this;
    }

    /**
     * Get ag6
     *
     * @return string
     */
    public function getAg6()
    {
        return $this->ag6;
    }

    /**
     * Set ag8
     *
     * @param string $ag8
     *
     * @return Ingredients
     */
    public function setAg8($ag8)
    {
        $this->ag8 = $ag8;

        return $this;
    }

    /**
     * Get ag8
     *
     * @return string
     */
    public function getAg8()
    {
        return $this->ag8;
    }

    /**
     * Set ag10
     *
     * @param string $ag10
     *
     * @return Ingredients
     */
    public function setAg10($ag10)
    {
        $this->ag10 = $ag10;

        return $this;
    }

    /**
     * Get ag10
     *
     * @return string
     */
    public function getAg10()
    {
        return $this->ag10;
    }

    /**
     * Set ag12
     *
     * @param string $ag12
     *
     * @return Ingredients
     */
    public function setAg12($ag12)
    {
        $this->ag12 = $ag12;

        return $this;
    }

    /**
     * Get ag12
     *
     * @return string
     */
    public function getAg12()
    {
        return $this->ag12;
    }

    /**
     * Set ag14
     *
     * @param string $ag14
     *
     * @return Ingredients
     */
    public function setAg14($ag14)
    {
        $this->ag14 = $ag14;

        return $this;
    }

    /**
     * Get ag14
     *
     * @return string
     */
    public function getAg14()
    {
        return $this->ag14;
    }

    /**
     * Set ag16
     *
     * @param string $ag16
     *
     * @return Ingredients
     */
    public function setAg16($ag16)
    {
        $this->ag16 = $ag16;

        return $this;
    }

    /**
     * Get ag16
     *
     * @return string
     */
    public function getAg16()
    {
        return $this->ag16;
    }

    /**
     * Set ag18
     *
     * @param string $ag18
     *
     * @return Ingredients
     */
    public function setAg18($ag18)
    {
        $this->ag18 = $ag18;

        return $this;
    }

    /**
     * Get ag18
     *
     * @return string
     */
    public function getAg18()
    {
        return $this->ag18;
    }

    /**
     * Set ag181
     *
     * @param string $ag181
     *
     * @return Ingredients
     */
    public function setAg181($ag181)
    {
        $this->ag181 = $ag181;

        return $this;
    }

    /**
     * Get ag181
     *
     * @return string
     */
    public function getAg181()
    {
        return $this->ag181;
    }

    /**
     * Set ag182
     *
     * @param string $ag182
     *
     * @return Ingredients
     */
    public function setAg182($ag182)
    {
        $this->ag182 = $ag182;

        return $this;
    }

    /**
     * Get ag182
     *
     * @return string
     */
    public function getAg182()
    {
        return $this->ag182;
    }

    /**
     * Set ag183
     *
     * @param string $ag183
     *
     * @return Ingredients
     */
    public function setAg183($ag183)
    {
        $this->ag183 = $ag183;

        return $this;
    }

    /**
     * Get ag183
     *
     * @return string
     */
    public function getAg183()
    {
        return $this->ag183;
    }

    /**
     * Set ag204
     *
     * @param string $ag204
     *
     * @return Ingredients
     */
    public function setAg204($ag204)
    {
        $this->ag204 = $ag204;

        return $this;
    }

    /**
     * Get ag204
     *
     * @return string
     */
    public function getAg204()
    {
        return $this->ag204;
    }

    /**
     * Set ag205
     *
     * @param string $ag205
     *
     * @return Ingredients
     */
    public function setAg205($ag205)
    {
        $this->ag205 = $ag205;

        return $this;
    }

    /**
     * Get ag205
     *
     * @return string
     */
    public function getAg205()
    {
        return $this->ag205;
    }

    /**
     * Set ag226
     *
     * @param string $ag226
     *
     * @return Ingredients
     */
    public function setAg226($ag226)
    {
        $this->ag226 = $ag226;

        return $this;
    }

    /**
     * Get ag226
     *
     * @return string
     */
    public function getAg226()
    {
        return $this->ag226;
    }

    /**
     * Set cholesterol
     *
     * @param string $cholesterol
     *
     * @return Ingredients
     */
    public function setCholesterol($cholesterol)
    {
        $this->cholesterol = $cholesterol;

        return $this;
    }

    /**
     * Get cholesterol
     *
     * @return string
     */
    public function getCholesterol()
    {
        return $this->cholesterol;
    }

    /**
     * Set sel
     *
     * @param string $sel
     *
     * @return Ingredients
     */
    public function setSel($sel)
    {
        $this->sel = $sel;

        return $this;
    }

    /**
     * Get sel
     *
     * @return string
     */
    public function getSel()
    {
        return $this->sel;
    }

    /**
     * Set calcium
     *
     * @param string $calcium
     *
     * @return Ingredients
     */
    public function setCalcium($calcium)
    {
        $this->calcium = $calcium;

        return $this;
    }

    /**
     * Get calcium
     *
     * @return string
     */
    public function getCalcium()
    {
        return $this->calcium;
    }

    /**
     * Set chlorure
     *
     * @param string $chlorure
     *
     * @return Ingredients
     */
    public function setChlorure($chlorure)
    {
        $this->chlorure = $chlorure;

        return $this;
    }

    /**
     * Get chlorure
     *
     * @return string
     */
    public function getChlorure()
    {
        return $this->chlorure;
    }

    /**
     * Set cuivre
     *
     * @param string $cuivre
     *
     * @return Ingredients
     */
    public function setCuivre($cuivre)
    {
        $this->cuivre = $cuivre;

        return $this;
    }

    /**
     * Get cuivre
     *
     * @return string
     */
    public function getCuivre()
    {
        return $this->cuivre;
    }

    /**
     * Set fer
     *
     * @param string $fer
     *
     * @return Ingredients
     */
    public function setFer($fer)
    {
        $this->fer = $fer;

        return $this;
    }

    /**
     * Get fer
     *
     * @return string
     */
    public function getFer()
    {
        return $this->fer;
    }

    /**
     * Set iode
     *
     * @param string $iode
     *
     * @return Ingredients
     */
    public function setIode($iode)
    {
        $this->iode = $iode;

        return $this;
    }

    /**
     * Get iode
     *
     * @return string
     */
    public function getIode()
    {
        return $this->iode;
    }

    /**
     * Set magnesium
     *
     * @param string $magnesium
     *
     * @return Ingredients
     */
    public function setMagnesium($magnesium)
    {
        $this->magnesium = $magnesium;

        return $this;
    }

    /**
     * Get magnesium
     *
     * @return string
     */
    public function getMagnesium()
    {
        return $this->magnesium;
    }

    /**
     * Set manganese
     *
     * @param string $manganese
     *
     * @return Ingredients
     */
    public function setManganese($manganese)
    {
        $this->manganese = $manganese;

        return $this;
    }

    /**
     * Get manganese
     *
     * @return string
     */
    public function getManganese()
    {
        return $this->manganese;
    }

    /**
     * Set phosphore
     *
     * @param string $phosphore
     *
     * @return Ingredients
     */
    public function setPhosphore($phosphore)
    {
        $this->phosphore = $phosphore;

        return $this;
    }

    /**
     * Get phosphore
     *
     * @return string
     */
    public function getPhosphore()
    {
        return $this->phosphore;
    }

    /**
     * Set potassium
     *
     * @param string $potassium
     *
     * @return Ingredients
     */
    public function setPotassium($potassium)
    {
        $this->potassium = $potassium;

        return $this;
    }

    /**
     * Get potassium
     *
     * @return string
     */
    public function getPotassium()
    {
        return $this->potassium;
    }

    /**
     * Set solonium
     *
     * @param string $solonium
     *
     * @return Ingredients
     */
    public function setSolonium($solonium)
    {
        $this->solonium = $solonium;

        return $this;
    }

    /**
     * Get solonium
     *
     * @return string
     */
    public function getSolonium()
    {
        return $this->solonium;
    }

    /**
     * Set sodium
     *
     * @param string $sodium
     *
     * @return Ingredients
     */
    public function setSodium($sodium)
    {
        $this->sodium = $sodium;

        return $this;
    }

    /**
     * Get sodium
     *
     * @return string
     */
    public function getSodium()
    {
        return $this->sodium;
    }

    /**
     * Set zinc
     *
     * @param string $zinc
     *
     * @return Ingredients
     */
    public function setZinc($zinc)
    {
        $this->zinc = $zinc;

        return $this;
    }

    /**
     * Get zinc
     *
     * @return string
     */
    public function getZinc()
    {
        return $this->zinc;
    }

    /**
     * Set retinol
     *
     * @param string $retinol
     *
     * @return Ingredients
     */
    public function setRetinol($retinol)
    {
        $this->retinol = $retinol;

        return $this;
    }

    /**
     * Get retinol
     *
     * @return string
     */
    public function getRetinol()
    {
        return $this->retinol;
    }

    /**
     * Set betaCarotine
     *
     * @param string $betaCarotine
     *
     * @return Ingredients
     */
    public function setBetaCarotine($betaCarotine)
    {
        $this->betaCarotine = $betaCarotine;

        return $this;
    }

    /**
     * Get betaCarotine
     *
     * @return string
     */
    public function getBetaCarotine()
    {
        return $this->betaCarotine;
    }

    /**
     * Set vitD
     *
     * @param string $vitD
     *
     * @return Ingredients
     */
    public function setVitD($vitD)
    {
        $this->vitD = $vitD;

        return $this;
    }

    /**
     * Get vitD
     *
     * @return string
     */
    public function getVitD()
    {
        return $this->vitD;
    }

    /**
     * Set vitE
     *
     * @param string $vitE
     *
     * @return Ingredients
     */
    public function setVitE($vitE)
    {
        $this->vitE = $vitE;

        return $this;
    }

    /**
     * Get vitE
     *
     * @return string
     */
    public function getVitE()
    {
        return $this->vitE;
    }

    /**
     * Set vitK1
     *
     * @param string $vitK1
     *
     * @return Ingredients
     */
    public function setVitK1($vitK1)
    {
        $this->vitK1 = $vitK1;

        return $this;
    }

    /**
     * Get vitK1
     *
     * @return string
     */
    public function getVitK1()
    {
        return $this->vitK1;
    }

    /**
     * Set vitK2
     *
     * @param string $vitK2
     *
     * @return Ingredients
     */
    public function setVitK2($vitK2)
    {
        $this->vitK2 = $vitK2;

        return $this;
    }

    /**
     * Get vitK2
     *
     * @return string
     */
    public function getVitK2()
    {
        return $this->vitK2;
    }

    /**
     * Set vitC
     *
     * @param string $vitC
     *
     * @return Ingredients
     */
    public function setVitC($vitC)
    {
        $this->vitC = $vitC;

        return $this;
    }

    /**
     * Get vitC
     *
     * @return string
     */
    public function getVitC()
    {
        return $this->vitC;
    }

    /**
     * Set vitB1
     *
     * @param string $vitB1
     *
     * @return Ingredients
     */
    public function setVitB1($vitB1)
    {
        $this->vitB1 = $vitB1;

        return $this;
    }

    /**
     * Get vitB1
     *
     * @return string
     */
    public function getVitB1()
    {
        return $this->vitB1;
    }

    /**
     * Set bitB2
     *
     * @param string $bitB2
     *
     * @return Ingredients
     */
    public function setBitB2($bitB2)
    {
        $this->bitB2 = $bitB2;

        return $this;
    }

    /**
     * Get bitB2
     *
     * @return string
     */
    public function getBitB2()
    {
        return $this->bitB2;
    }

    /**
     * Set bitB3
     *
     * @param string $bitB3
     *
     * @return Ingredients
     */
    public function setBitB3($bitB3)
    {
        $this->bitB3 = $bitB3;

        return $this;
    }

    /**
     * Get bitB3
     *
     * @return string
     */
    public function getBitB3()
    {
        return $this->bitB3;
    }

    /**
     * Set vitB5
     *
     * @param string $vitB5
     *
     * @return Ingredients
     */
    public function setVitB5($vitB5)
    {
        $this->vitB5 = $vitB5;

        return $this;
    }

    /**
     * Get vitB5
     *
     * @return string
     */
    public function getVitB5()
    {
        return $this->vitB5;
    }

    /**
     * Set vitB6
     *
     * @param string $vitB6
     *
     * @return Ingredients
     */
    public function setVitB6($vitB6)
    {
        $this->vitB6 = $vitB6;

        return $this;
    }

    /**
     * Get vitB6
     *
     * @return string
     */
    public function getVitB6()
    {
        return $this->vitB6;
    }

    /**
     * Set vitB9
     *
     * @param string $vitB9
     *
     * @return Ingredients
     */
    public function setVitB9($vitB9)
    {
        $this->vitB9 = $vitB9;

        return $this;
    }

    /**
     * Get vitB9
     *
     * @return string
     */
    public function getVitB9()
    {
        return $this->vitB9;
    }

    /**
     * Set bitB12
     *
     * @param string $bitB12
     *
     * @return Ingredients
     */
    public function setBitB12($bitB12)
    {
        $this->bitB12 = $bitB12;

        return $this;
    }

    /**
     * Get bitB12
     *
     * @return string
     */
    public function getBitB12()
    {
        return $this->bitB12;
    }


}
