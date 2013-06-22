<?php
ini_set("display_errors" , "1");
header("Content-Type: application/json");

define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);

// REQUIRES
require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'Slim'. DIRECTORY_SEPARATOR .'Slim.php';
require_once WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'UserDAO.php';
require_once WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'LikeDAO.php';

// New slim framework maken
$app = new Slim();

// USER DINGEN
$app->get('/hello',function(){

});

$app->post('/user/check', function(){
	//$user_profile = Slim::getInstance()->request()->post();
    //$userDAO = new UserDAO();
    //$result = $userDAO->checkInDatabase($user_profile['id']);
    echo 'hello world';
    //echo $user_profile;

    //exit();
});

$app->run();