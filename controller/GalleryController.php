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
                $this->voteForBurger();
            }
        }
    }


}
