<?php
session_start();

include("allInclude.php");

//require_once 'functions/main.php';
require_once 'back/composants/header.php';

$url = isset($_GET['page']) ? $_GET['page'] : 'home';

//echo $url;

switch ($url) {
    case 'home':
        require 'front/pages/home.php';
        break;
    case 'media':
        require 'front/pages/gallery.php';
        break;
    case 'nous-contacter':
        require 'front/pages/contact.php';
        break;
    case 'nos-projets':
        require 'front/pages/projet.php';
        break;
    case 'a-propos':
        require 'front/pages/propos.php';
        break;
    case 'login':
        require 'front/pages/login.php';
        break;
    case 'admin/logout':
        require 'back/pages/logout.php';
        break;
    case 'dashboard':
        require 'back/pages/dashboard.php';
        break;
    case 'password':
        require 'back/pages/password.php';
        break;
    case 'reglages':
        require 'back/pages/reglages.php';
        break;
    case 'modification':
        require 'back/pages/modification.php';
        break;
    default:
        require 'front/pages/404.php';
        break;
}

require_once 'front/pages/creation_site.php';
require_once 'back/composants/footer.php';




