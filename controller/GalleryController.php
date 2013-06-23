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

    // --------------
    // 80S GALLERYYY
    // --------------
    private function load80sGallery(){

        // Decade invullen dan alle burgers ophalen
        $decade = "80";
        $this->getAllBurgersForDecade($decade);

        $subtemplate = $this->smarty->fetch('pages/partials/gallery80s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);
    }

    // --------------
    // 00S GALLERYYY
    // --------------
    private function load00sGallery(){

        // Decade invullen dan alle burgers ophalen
        $decade = "00";
        $this->getAllBurgersForDecade($decade);

        // Juiste template inladen
        $subtemplate = $this->smarty->fetch('pages/partials/gallery00s.tpl');
        $this->smarty->assign('subtemplate', $subtemplate);
    }

    // --------------
    // GET ALL BURGERS FOR GALLERY
    // --------------

        // De decade hebben we al bepaald via de GET
        // Dus we hebben die al meegegeven als variabele
    private function getAllBurgersForDecade($decade){

       $burgerDAO = new BurgerDAO();
       $alleBurgers = $burgerDAO->getAllBurgersForDecade($decade);

        // Resultaat chekcen
        if($alleBurgers == "noBurgersWereFound"){

            echo "error geen burgers gevonden";

        }else{

            // Hier zullen alle burger object in gepusht worden
            $alleBurgersKlaar = Array();

            $i = 0;

            $userDAO = new UserDAO();
            $likeDAO = new LikeDAO();

            // Overlopen van de like scores
            // doen we ook al in de for each
            $besteBurger = Array();
            $tweedeBurger = Array();
            $derdeBurger = Array();

            // De likes van allen gaan eerst op nul
            $besteBurger["likes"] = 0;
            $tweedeBurger["likes"] = 0;
            $derdeBurger["likes"] = 0;


            foreach ($alleBurgers as $burger){

                    // Nieuwe burger aanmaken
                    $burger = Array();

                    // Burger_id
                    $burger["id"] = $alleBurgers[$i][0];

                    // Creator id
                    $burger["creator_id"] = $alleBurgers[$i][7];

                    // juiste decade inladen
                    $burger["decade"] = $alleBurgers[$i][6];

                    // Naam van de creator ophalen
                    $naam = $userDAO->getUserForBurgerID($burger["creator_id"]);
                    $burger["user_name"] = $naam[0] . " " . $naam[1];



                    // Aantal likes per burger ophalen
                    $likes = $likeDAO->getLikesForBurger($burger["id"]);
                    $burger["likes"] = $likes[0];

                    // Likes overlopen
                    if($burger["likes"] > $besteBurger["likes"]){
                        $besteBurger = $burger;
                    }
                    else if($burger["likes"] > $tweedeBurger["likes"]){
                        $tweedeBurger = $burger;
                    }
                    else if($burger["likes"] > $derdeBurger["likes"]){
                        $derdeBurger = $burger;
                    }

                    array_push($alleBurgersKlaar, $burger);
                    $i ++;
            }


            // Burgers doorgeven voor top 3
            $this->smarty->assign('besteBurger', $besteBurger);
            $this->smarty->assign('tweedeBurger', $tweedeBurger);
            $this->smarty->assign('derdeBurger', $derdeBurger);

            // Alle burgers doorgeven zodat ze in template geladen kunnen worden
            $this->smarty->assign('alleBurgers', $alleBurgersKlaar);



        }

    }




}
