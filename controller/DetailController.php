<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 22/06/13
 * Time: 16:12
 * To change this template use File | Settings | File Templates.
 */
class DetailController extends AppController
{
    function __construct(){
            parent::__construct();
        }

        function filter()
        {
            $this->getAllBurgerStuff();
            // Gallery tpl inladen
            return $this->smarty->fetch('pages' . DS . 'gallery.tpl');
        }

        // ----------------------------------------
        // BURGER INFORMATIE OPHALEN EN CHECKEN
        // ----------------------------------------

        private function getAllBurgerStuff(){

        // Allereerst halen we de burger _ id op
        // We kijken in welke decade we moeten zijn
        // Laden de juiste template in
            $burger_id = $this->getBurgerId();

            // Als er geen burger id is dan tonen we de error page
            if ($burger_id == "toonErrorPage"){
                 $this->loadErrorPage;
               }
            // Als er wel een burger id is, dan laden we de burger info in
            else{

                $burgerDAO = new BurgerDAO();
                $burgerFromDB = $burgerDAO->getBurgerinfoByBurgerid($burger_id);

                // Burger array aanmaken
                $burger = Array();

                // Burger ID meegeven
                $burger["id"] = $burgerFromDB["id"];

                // array met ingredienten maken
                $ingredienten = Array();

                // Kijken welk vlees er geselecteerd is
                // Meat uit de DB halen
                $meat = $burgerDAO->getMeatforBurger($burgerFromDB["meat_id"]);

                // Vegetable uit DB halen
                $vegetable = $burgerDAO->getVegetableForBurger($burgerFromDB["vegetable_id"]);

                $ingredienten["meat"] = $meat[0];
                $ingredienten["vegetable"] = $vegetable[0];


                if($burgerFromDB["salad"] == 1){
                    $ingredienten["salad"] = "salad";
                }

                if($burgerFromDB["tomato"] == 1){
                   $ingredienten["tomato"] = "tomato";
               }

                // Sauzen ophalen
                $sauzen = $burgerDAO->getSauzenForBurger($burger_id);

                // index j
                $j = 0;
                // Sauzen overlopen en in de ingredientenlijst zetten
                foreach ($sauzen as $saus){

                    $index = "saus" . $j;
                    $ingredienten[$index] = $sauzen[$j]["sauce_name"];

                    $j++;

                }

                $burger["ingredienten"] = $ingredienten;

                // Juiste decade meegeven
                $burger["decade"] = $burgerFromDB["burger_decade"];


                // We gaan de burger likes ophalen
                $likeDAO = new LikeDAO();
                $likes = $likeDAO->getLikesForBurger($burger_id);

                // En we gaan de maker ophalen
                $userDAO = new UserDAO();
                $creator = $userDAO->getUserForBurgerID($burgerFromDB["user_id"]);

                // Daarna steken we alles in het burger object
                $burger["creator"] = $creator[0] . " " . $creator[1];
                $burger["votes"] = $likes[0];


                $this->smarty->assign('burger', $burger);


                // En dan kunnen we de juiste detail page laten zien adhv de decade
                switch($burgerFromDB['burger_decade'])
                   {

                    case "50":
                    $this->load50sDetail();
                    break;

                    case "80":
                    $this->load80sDetail();
                    break;

                    case "00":
                    $this->load00sDetail();
                    break;

                    default:
                    $this->loadErrorPage();
                    break;
                   }
            }

        }

        // ----------------------------------------
        // GET BURGER ID
        // ----------------------------------------
        private function getBurgerId(){

            if(isset($_GET["burgerId"]) && !empty($_GET["burgerId"]) && $_GET["burgerId"] != ""){

                $burger_id = $_GET["burgerId"];
                return $burger_id;

            }

            // Er is geen burger id gevonden => We tonen de error page
            $this->loadErrorPage();

        }

        // ----------------------------------------
        // ERROR PAGE TONEN
        // ----------------------------------------
        private function loadErrorPage(){
            $subtemplate = $this->smarty->fetch('pages' . DS . 'partials' . DS . '404.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);
        }

        // --------------
        // 50S DETAIL
        // --------------
        private function load50sDetail(){
            $subtemplate = $this->smarty->fetch('pages/partials/detail50s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);
        }

        // --------------
        // 80S DETAIL
        // --------------
        private function load80sDetail(){
            $subtemplate = $this->smarty->fetch('pages/partials/detail80s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);
        }

        // --------------
        // 00S DETAIL
        // --------------
        private function load00sDetail(){
            $subtemplate = $this->smarty->fetch('pages/partials/detail00s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);
        }




}
