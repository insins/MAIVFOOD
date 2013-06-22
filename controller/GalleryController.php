<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 16/06/13
 * Time: 20:09
 * To change this template use File | Settings | File Templates.
 */



class GalleryController extends AppController
{
    function __construct(){
        parent::__construct();
    }

    function filter()
    {


        // DECADE BEPALEN
        switch($this->decade)
        {
             case "50s":
             $this->load50sGallery();
             // subtemplate
             break;

             case "80s":
             $this->load80sGallery();
             break;

             case "00s":
             $this->load00sGallery();
             break;

             default:
             $this->load50sGallery();
             break;
        }

        // Gallery tpl inladen
        return $this->smarty->fetch('pages' . DS . 'gallery.tpl');
    }

    // --------------
    // 50S GALLERYYY
    // --------------
    private function load50sGallery(){

        $this->checkAction();
        $subtemplate = $this->smarty->fetch('pages' . DS . 'partials' . DS . 'gallery50s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);


    }

    private function load80sGallery(){
        $this->checkAction();

        $subtemplate = $this->smarty->fetch('pages/partials/gallery80s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);
    }

    private function load00sGallery(){
        $this->checkAction();

        $subtemplate = $this->smarty->fetch('pages/partials/gallery00s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);
    }

    // --------------
    // CHECK FOR ACTION FUNCTIE
    // --------------
    private function checkAction(){
        // Kijken of er een action gebeurt
        $action = "";

        if(isset($_GET["action"]) && $_GET["action"] != ""){

           $action = $_GET["action"];

        }

        // Een switch op de action gebeurt
        if($action == "vote"){
            if (!empty($_GET["burgerId"])){
                $this->logintofacebook();
            }
        }
    }

        // --------------
       // FB AUTH + LOGIN
       // --------------
    private function logintofacebook(){

      $user = null;

        // FACEBOOK APP DINGEN IN ORDE BRENGEN
                 $facebook = new Facebook(array(
                   'appId'  => "616766485000843",
                   'secret' => "edd55c3a3277b6ba91fa426dea80c8cb",
                   'cookie' => true,
                 ));

                 //Facebook Authentication
                 $user = $facebook->getUser();
                 $loginUrl = $facebook->getLoginUrl(
                 array(
                   'scope' => 'email,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown'
                 )
                 );
                    //echo($_SESSION);

                 header("location: ".$loginUrl);

                if ($user) {
                  trace(" The user is logged in");
                  try {
                    $facebook->api('/me');
                      trace("API call succeeded, you have a valid access token");
                    // Here : API call succeeded, you have a valid access token
                  } catch (FacebookApiException $e) {
                      trace("API call failed, you don't have a valid access token");
                    // Here : API call failed, you don't have a valid access token
                    // you have to send him to $facebook->getLoginUrl()
                    $user = null;
                  }
                } else {
                    trace("The user is not logged");
                    header("location: ".$loginUrl);
                  // The user is not logged
                  // you have to send him to $facebook->getLoginUrl()
                }
                if (!$user) {

                  // display link to $facebook->getLoginUrl();
                }



                 // Als er een user is gevonden
                 /*if ($user) {
                   try {
                     // De user ophalen via "/me"
                     $user_profile = $facebook->api('/me');

                     // Joepie we kunnen beginnen checken
                     if($user_profile){

                        // Zit de user al in onze db?
                        $userDAO = new UserDAO();
                        $userID = $userDAO->checkInDatabase($user_profile["id"]);

                         // Als het niet zo is -> insert in de DB en daarna userID
                         if($userID == "-1"){

                            $checkSuccesInsert = $userDAO->insertUser($user_profile);
                            if($checkSuccesInsert == true){
                                $userID = $user_profile["id"];
                            }
                         }

                     // We hebben eindelijk een user.
                     // Nu moeten we checken of hij de burger al geliked heeft

                         // Burger ID uit de URL halen
                         $burger_id = $_GET["burgerId"];

                         $likeDAO = new LikeDAO();
                         $checkLike = $likeDAO->chechUserLikedBurger($userID, $burger_id);

                         // Like checken
                         if($checkLike == true){
                             // Like bestaat al, dus je kan niet nog is liken
                             trace("Error, like bestaat al");
                         }
                         else{
                             // Like bestaat nog niet we gaan hem dan inserten
                             $likeDAO->insertLike($burger_id, $userID);
                         }
                     }

                  } catch (FacebookApiException $e) {
                    error_log($e);
                    $user = null;
                  }
                } */
            }




    }