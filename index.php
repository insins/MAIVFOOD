<?php

    session_start();

    ini_set("log_errors" , "1");
    ini_set("error_log" , "logs/allerrors.log");
    ini_set("display_errors" , "0");

    define("DS",DIRECTORY_SEPARATOR);
    define("WWW_ROOT",dirname(__FILE__) . DS);

    // echo "HELLO WORLD";

    // import files
    require_once WWW_ROOT . "includes" . DS . "functions.php";


    muteExpectedErrors();
    require_once WWW_ROOT . "classes" . DS . "Config.php";

    // controllers
    require_once WWW_ROOT . "controller" . DS . "AppController.php";
    require_once WWW_ROOT . "controller" . DS . "CampaignController.php";
    require_once WWW_ROOT . "controller" . DS . "CreateController.php";
    require_once WWW_ROOT . "controller" . DS . "GalleryController.php";

    // DAO's
    require_once WWW_ROOT . "DAO" . DS . "DatabasePDO.php";
    require_once WWW_ROOT . "DAO" . DS . "UserDAO.php";
    require_once WWW_ROOT . "DAO" . DS . "LikeDAO.php";



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

    }


    $controller->render();

?>
