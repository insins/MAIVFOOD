<?php

    session_start();

    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    ini_set("log_errors" , "1");
    ini_set("error_log" , "logs/allerrors.log");

    define("DS",DIRECTORY_SEPARATOR);
    define("WWW_ROOT",dirname(__FILE__) . DS);

    // echo "HELLO WORLD";

    // import files
    require_once WWW_ROOT . "includes" . DS . "functions.php";


    muteExpectedErrors();
    require_once WWW_ROOT . "classes" . DS . "Config.php";

    // controllers
    // set to online path
    require_once(WWW_ROOT . 'smarty/libs/Smarty.class.php');
    require_once WWW_ROOT . "controller" . DS . "AppController.php";
    require_once WWW_ROOT . "controller" . DS . "CampaignController.php";
    require_once WWW_ROOT . "controller" . DS . "CreateController.php";
    require_once WWW_ROOT . "controller" . DS . "GalleryController.php";
    require_once WWW_ROOT . "controller" . DS . "DetailController.php";


    // DAO's
    require WWW_ROOT . "DAO" . DS . "DatabasePDO.php";
    require WWW_ROOT . "DAO" . DS . "UserDAO.php";
    require WWW_ROOT . "DAO" . DS . "LikeDAO.php";
    require WWW_ROOT . "DAO" . DS . "BurgerDAO.php";




    // set variables
    $config = new Config();




    $page = isset($_GET['page']) ? $_GET['page'] : 'campaign';
    $controller = "";

    switch($page)
    {
        default:
            $controller = new AppController();
            break;

        case 'campaign':
            $controller = new CampaignController();
            break;

        case 'create':
            $controller = new CreateController();
            break;

        case 'gallery':
            $controller = new GalleryController();
            break;

        case 'detail':
            $controller = new DetailController();
            break;

    }


    $controller->render();

?>
