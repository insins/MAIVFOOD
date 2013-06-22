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

$app->post('/user/checkExistance', function(){

	$request = Slim::getInstance()->request();
	$dao = new UserDAO();
	$result = $dao->checkUserExistance($request->post()['id']);
	echo json_encode($result);

});

$app->run();
