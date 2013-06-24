<?php

define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);


require_once WWW_ROOT. "api" .DIRECTORY_SEPARATOR. 'Slim'. DIRECTORY_SEPARATOR .'Slim.php';
require WWW_ROOT. "classes" .DIRECTORY_SEPARATOR. 'Config.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'DatabasePDO.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'UserDAO.php';
require WWW_ROOT. "DAO" .DIRECTORY_SEPARATOR. 'LikeDAO.php';




$app = new Slim();

$app->get('/hello',function(){
	echo "hello world";
});


// CHECKEN USER BESTAAT
// INDIEN NIET GEVONDEN -> ADDEN IN DE DB
$app->post('/user/checkExistance', function(){

    $user = Slim::getInstance()->request()->post();
    $dao = new UserDAO();
    $result = $dao->checkUserExistance($user['id']);

    if($result == "-1"){
        $test = $dao->insertUser($user);
        if ($test){
            echo json_encode($user['id']);
            exit();
        }
        else{
            echo json_encode("error");
            exit();
        }

    }
    echo json_encode($result);
    exit();
});

// EERST ALLE BURGERS OPHALEN SAMEN MET DE NAAM VAN DE CREATOR
//
$app->post('/user/getUsersForSearchQuery', function(){

    $query = Slim::getInstance()->request()->post();
    $dao = new UserDAO();
    $result = $dao->getAllUsersForSearchQuery($query['zoekQuery'], $query["decade"]);

    echo json_encode($result);
    exit();
});

// LIKE CHECKEN
// ALS HET NIET BESTAAT -> IN DE DB STEKEN
$app->get('/like/check',function(){

    $request = Slim::getInstance()->request();
    $user_id = $request->get('userID');
    $burger_id = $request->get('burgerID');

    $likeDAO = new LikeDAO();
    $checkIfLikeExist = $likeDAO->chechUserLikedBurger($user_id, $burger_id);

    if($checkIfLikeExist){
        echo "errorAlreadyLiked";
    }
    else{

        $likeDAO->insertLike($user_id, $burger_id);
        echo "gelukt";
        exit();
    }
});


/* ------------------------ */
/* functies om van ios naar db te gaan */
/* ------------------------ */

$app->post('/user/insertburger/', function(){

	$request = Slim::getInstance()->request();
	echo "HELLO WORLD TO IOS";

});

$app->run();
