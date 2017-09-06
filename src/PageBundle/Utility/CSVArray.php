<?php
/**
 * Created by PhpStorm.
 * User: tauvray
 * Date: 8/31/17
 * Time: 12:28 PM
 */

namespace PageBundle\Utility;


class CSVArray
{
    protected $cleanArray;

    function __construct()
    {
        $this->cleanArray =
            array(
                "codeInterneFamille" => "ORIGGPCD",
                "famille" => "ORIGGPFR",
                "codeInterne" => "ORIGFDCD",
                "name" => "ORIGFDNM",
                "energie"   => "Energie, Règlement UE No 1169/2011 (kJ/100g)",
                "energie2" => "Energie, Règlement UE No 1169/2011 (kcal/100g)",
                "energie3" => "Energie, N x facteur Jones, avec fibres  (kJ/100g)",
                "energie4" => "Energie, N x facteur Jones, avec fibres  (kcal/100g)",
                "eau" => "Eau (g/100g)",
                "proteines" => "Protéines (g/100g)",
                "proteinesBrute" => "Protéines brutes, N x 6.25 (g/100g)",
                "glucides" => "Glucides (g/100g)",
                "lipides" => "Lipides (g/100g)",
                "sucres" => "Sucres (g/100g)",
                "amidon" => "Amidon (g/100g)",
                "fibres" => "Fibres alimentaires (g/100g)",
                "polyols" => "Polyols totaux (g/100g)",
                "cendres" => "Cendres (g/100g)",
                "alcool" => "Alcool (g/100g)",
                "acides" => "Acides organiques (g/100g)",
                "agSatures" => "AG saturés (g/100g)",
                "agMono" => "AG monoinsaturés (g/100g)",
                "agPoly" => "AG polyinsaturés (g/100g)",
                "ag4" => "AG 4:0, butyrique (g/100g)",
                "ag6" => "AG 6:0, caproïque (g/100g)",
                "ag8" => "AG 8:0, caprylique (g/100g)",
                "ag10" => "AG 10:0, caprique (g/100g)",
                "ag12" => "AG 12:0, laurique (g/100g)",
                "ag14" => "AG 14:0, myristique (g/100g)",
                "ag16" => "AG 16:0, palmitique (g/100g)",
                "ag18" => "AG 18:0, stéarique (g/100g)",
                "ag181" => "AG 18:1 9c (n-9), oléique (g/100g)",
                "ag182" => "AG 18:2 9c,12c (n-6), linoléique (g/100g)",
                "ag183" => "AG 18:3 c9,c12,c15 (n-3), alpha-linoléique (g/100g)",
                "ag204" => "AG 20:4 5c,8c,11c,14c (n-6), arachidonique (g/100g)",
                "ag205" => "AG 20:5 5c,8c,11c,14c,17c (n-3) EPA (g/100g)",
                "ag226" => "AG 22:6 4c,7c,10c,13c,16c,19c (n-3) DHA (g/100g)",
                "cholesterol" => "Cholestérol (mg/100g)",
                "sel" => "Sel chlorure de sodium (g/100g)",
                "calcium" => "Calcium (mg/100g)",
                "chlorure" => "Chlorure (mg/100g)",
                "cuivre" => "Cuivre (mg/100g)",
                "fer" => "Fer (mg/100g)",
                "iode" => "Iode (�g/100g)",
                "magnesium" => "Magnésium (mg/100g)",
                "manganese" => "Manganèse (mg/100g)",
                "phosphore" => "Phosphore (mg/100g)",
                "potassium" => "Potassium (mg/100g)",
                "solonium" => "Selenium (�g/100g)",
                "sodium" => "Sodium (mg/100g)",
                "zinc" => "Zinc (mg/100g)",
                "retinol" => "Retinol (�g/100g)",
                "betaCarotine" => "Beta-Carotène (µg/100g)",
                "vitD" => "Vitamine D (µg/100g)",
                "vitE" => "Vitamine E (mg/100g)",
                "vitK1" => "Vitamine K1 (µg/100g)",
                "vitK2" => "Vitamine K2 (µg/100g)",
                "vitC" => "Vitamine C (mg/100g)",
                "vitB1" => "Vitamine B1 ou Thiamine (mg/100g)",
                "bitB2" => "Vitamine B2 ou Riboflavine (mg/100g)",
                "bitB3" => "Vitamine B3 ou PP ou Niacine (mg/100g)",
                "vitB5" => "Vitamine B5 ou Acide pantothenique (mg/100g)",
                "vitB6" => "Vitamine B6 (mg/100g)",
                "vitB9" => "Vitamine B9 ou Folates totaux (µg/100g)",
                "bitB12" => "Vitamine B12 (µg/100g)"

            );
    }

}