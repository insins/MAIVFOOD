<?php

header("Content-Type: application/json");

define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);

require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'Slim'. DIRECTORY_SEPARATOR .'Slim.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'UserDAO.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'LikeDAO.php';




$app = new Slim();

// USER 
$app->post('/user/check', 'checkUser');


$app->run();



/* USER FUNCTIONS 
----------------- */
function checkUser()
{
    $user = Slim::getInstance()->request()->post();
    $userDAO = new UserDAO();
    echo json_encode($userDAO->checkInDatabase($user['id']));
    exit();
}
