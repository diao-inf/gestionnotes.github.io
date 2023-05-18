<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // require_once "view/template/layout.html.php";
    // pour un seule temple - debut
    //$ficCss = "../view/template/style.css";
    //$vue = "";
    //ob_start();
    //require_once("view/connexion.html.php");
    //$vue .= ob_get_clean();
    //require_once "view/template/layout.html.php";
    // fin

    $menu = '';
if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
}

switch ($menu) {
    case '':
        require_once "view/connexion.html.php";
        break;
    case 'listerEleve':
        $vue = "";
        ob_start();
        require_once("view/lister/eleves.html.php");
        $vue .= ob_get_clean();
        require_once "view/template/layout.html.php";
        break;
    case 'exo2':
        require_once "models/Rectangle.php";
        $longueur = rand(1, 100);
        $largeur = rand(1, 100);
        if ($largeur > $longueur) {
            $temp = $largeur;
            $largeur = $longueur;
            $longueur = $temp;
            unset($temp);
        }
        $rectangle = new Rectangle($longueur, $largeur);

        // pour un seule temple - debut
        $vue = "";
        ob_start();
        require_once("vues/rectangle.html.php");
        $vue .= ob_get_clean();
        require_once MA_PAGE_VUE;
        // fin
        unset($vue);
        unset($longueur);
        unset($largeur);
        break;
    case 'exo3':
        require_once "models/Calculatrice.php";
        $val1 = rand(1, 100);
        $val2 = rand(1, 100);
        if ($val2 > $val1) {
            $temp = $val2;
            $val2 = $val1;
            $val1 = $temp;
            unset($temp);
        }
        $calculatrice = new Calculatrice($val1, $val2);

        // pour un seule temple - debut
        $vue = "";
        ob_start();
        require_once "vues/calculatrice.html.php";
        $vue .= ob_get_clean();
        require_once MA_PAGE_VUE;
        // fin
        unset($vue);
        unset($val1);
        unset($val2);
        break;
    default:
        require_once "vues/_index.html.php";
        break;
}


