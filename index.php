<?php 
session_start();

require 'connect.php';

if(!isset($_GET['page'])) $_GET['page'] = '';

switch ($_GET['page'])
{
    default:
        require 'templates/accueil.php';
        require 'models/accueil.php';
    break;

    case "collaborateur.php":
        require 'templates/collaborateur.php';
        require 'models/collaborateur.php';
    break;

    case "entretient.php":
        require 'templates/entretient.php';
        require 'models/entretient.php';
    break;
}

?>