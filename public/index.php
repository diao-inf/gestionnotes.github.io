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
    case 'listerAnneeScol':
        $vue = "";
        ob_start();
        require_once("view/lister/annees.html.php");
        $vue .= ob_get_clean();
        require_once "view/template/layout.html.php";
        break;
    case 'listerClasse':
        $vue = "";
        ob_start();
        require_once("view/lister/classes.html.php");
        $vue .= ob_get_clean();
        require_once "view/template/layout.html.php";
        break;
    case 'niveau':
        $vue = "";
        ob_start();
        require_once("view/lister/niveaux.html.php");
        $vue .= ob_get_clean();
        require_once "view/template/layout.html.php";
        break;
    case 'ajoutEleve':
        $vue = "";
        ob_start();
        require_once("view/ajout/eleve.html.php");
        $vue .= ob_get_clean();
        require_once "view/template/layout.html.php";
        break;
    case 'ajoutClasse':
        $vue = "";
        ob_start();
        require_once("view/ajout/classe.html.php");
        $vue .= ob_get_clean();
        require_once "view/template/layout.html.php";
        break;
    default:
        require_once "view/connexion.html.php";
        break;
}


