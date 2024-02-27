<?php
const URL = "/mvc/";

if(empty($_GET["address"])):
    $_GET["address"] = "home";
endif;

$address = explode("/", mb_strtolower(trim($_GET["address"], "/")));

switch($address[0]):
    case "home":
        require_once "app/controllers/HomeController.php";
        $homeController = new HomeController;
        $homeController->index();
        break;

    default:
        echo "Page is not found";
endswitch;