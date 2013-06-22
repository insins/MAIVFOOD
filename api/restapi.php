<?php
ini_set("display_errors" , "1");
header("Content-Type: application/json");

define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);

require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'Slim'. DIRECTORY_SEPARATOR .'Slim.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'UserDAO.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'LikeDAO.php';




$app = new Slim();

<<<<<<< HEAD
// USER DINGEN
$app->get('/hello',function(){
=======
// USER 
$app->post('/user/check', 'checkUser');


$app->run();
>>>>>>> cc60d3f70e231af9ed0011992b80760e05d28e1e

});

<<<<<<< HEAD
$app->post('/user/check', function(){
	//$user_profile = Slim::getInstance()->request()->post();
    //$userDAO = new UserDAO();
    //$result = $userDAO->checkInDatabase($user_profile['id']);
    echo 'hello world';
    //echo $user_profile;

    //exit();
});

$app->run();
=======

/* USER FUNCTIONS 
----------------- */
function checkUser()
{
    $user = Slim::getInstance()->request()->post();
    $userDAO = new UserDAO();
    echo json_encode($userDAO->checkInDatabase($user['id']));
    exit();
}
>>>>>>> cc60d3f70e231af9ed0011992b80760e05d28e1e
