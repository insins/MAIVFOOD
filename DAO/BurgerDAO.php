<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 23/06/13
 * Time: 12:57
 * To change this template use File | Settings | File Templates.
 */
class BurgerDAO
{
    public $dbh;

           public function __construct()
           {
               $this->dbh = DatabasePDO::getInstance();
           }

    // Alle burgers per decade ophalen
    public function getAllBurgersForDecade($decade){

        $sql = "SELECT * FROM maiv_food_burgers WHERE burger_decade = :decade";

        try{
          $stmt = $this->dbh->prepare($sql);
          $stmt->bindValue(":decade", $decade);
          $stmt->execute();
          $result = $stmt->fetchAll();

            // Als er geen rijen konden gevonden worden dan
            // No burgers were found
            if ($stmt->rowCount() > 0) {
                 return $result;
             } else {
                 return "noBurgersWereFound";
             }
          }
          catch(PDOException $e) {
              return $e->getMessage();
          }
    }


    // Burgerdetails per burger ophalen
    public function getBurgerinfoByBurgerid($burger_id){

        $sql = "SELECT * FROM maiv_food_burgers WHERE id = :burger_id";

        try{
          $stmt = $this->dbh->prepare($sql);
          $stmt->bindValue(":burger_id", $burger_id);
          $stmt->execute();
          $result = $stmt->fetch();

          return $result;

          }
          catch(PDOException $e) {
              return $e->getMessage();
          }


    }

    // Burger detail ophalen voor een detail pagina
    public function getBurgerDetailsForId($burger_id){

        $sql= "SELECT maiv_food_burgers.id, meat_name, salad, tomato, burger_decade, vegetable_name, user_id
        FROM maiv_food_burgers
        INNER JOIN maiv_food_meats
        ON maiv_food_burgers.meat_id = maiv_food_meats.id
        INNER JOIN maiv_food_vegetables
        ON maiv_food_burgers.vegetable_id = maiv_food_vegetables.id
        WHERE maiv_food_burgers.burger_decade = maiv_food_vegetables.vegetable_decade
        AND vegetable_id = maiv_food_burgers.vegetable_id
        AND maiv_food_burgers.burger_decade = maiv_food_meats.meat_decade
        AND meat_id = maiv_food_burgers.meat_id";

        try{
              $stmt = $this->dbh->prepare($sql);
              $stmt->bindValue(":burger_id", $burger_id);
              $stmt->execute();
              $result = $stmt->fetch();

              return $result;

              }
              catch(PDOException $e) {
                  return $e->getMessage();
              }

    }

    // Sauzen voor burger ophalen
    public function getSauzenForBurger($burger_id){

        $sql = "SELECT sauce_name FROM maiv_food_sauce WHERE burger_id = :burger_id";

            try{
              $stmt = $this->dbh->prepare($sql);
              $stmt->bindValue(":burger_id", $burger_id);
              $stmt->execute();
              $result = $stmt->fetchAll();

              return $result;

              }
              catch(PDOException $e) {
                  return $e->getMessage();
              }

    }
}
