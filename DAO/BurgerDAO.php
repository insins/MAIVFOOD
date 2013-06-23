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
}
