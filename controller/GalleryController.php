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

        // Decade invullen dan alle burgers ophalen
        $decade = "50";
        $this->getAllBurgersForDecade($decade);

        $subtemplate = $this->smarty->fetch('pages' . DS . 'partials' . DS . 'gallery50s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);


    }

    private function load80sGallery(){

        // Decade invullen dan alle burgers ophalen
        $decade = "50";
        $this->getAllBurgersForDecade($decade);

        $subtemplate = $this->smarty->fetch('pages/partials/gallery80s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);
    }

    private function load00sGallery(){

        // Decade invullen dan alle burgers ophalen
        $decade = "50";
        $this->getAllBurgersForDecade($decade);

        $subtemplate = $this->smarty->fetch('pages/partials/gallery00s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);
    }

        // GET ALL BURGERS FOR DECADE FUNCTION
    private function getAllBurgersForDecade($decade){



    }




}
