<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 21/06/13
 * Time: 22:18
 * To change this template use File | Settings | File Templates.
 */

class LikeDAO
{
    public $dbh;
         public function __construct()
         {
             $this->dbh = DatabasePDO::getInstance();
         }

    /*  ------------------------------------
        LIKE checken
    ------------------------------------ */
    public function chechUserLikedBurger($user_id, $burger_id){

        $sql = "SELECT * from maiv_food_user_likes WHERE user_id = :user_id AND burger_id = :burger_id";

        try{
          $stmt = $this->dbh->prepare($sql);
          $stmt->bindValue(":user_id", $user_id);
          $stmt->bindValue(":burger_id", $burger_id);
          $stmt->execute();
          $result = $stmt->fetch();

       // Als het resultaat niet "" is dan id ophalen, anders -1
            if ($stmt->rowCount() > 0) {
                 return true;
             } else {
                 return false;
             }
          }
          catch(PDOException $e) {
              return $e->getMessage();
          }

    }

    /*  ------------------------------------
        LIKE INSERTEN IN DE DB
    ------------------------------------ */
    public function insertLike($user_id, $burger_id){

        $sql = "INSERT INTO maiv_food_user_likes(user_id, burger_id) VALUES(:user_id,:burger_id)";

        try{
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(":user_id", $user_id);
            $stmt->bindValue(":burger_id", $burger_id);
            $stmt->execute();
            return true;

        }
        catch(PDOException $e) {
           return $e->getMessage();
       }
    }

    public function getLikesForBurger($burger_id){

        $sql = "SELECT COUNT(*) AS count FROM maiv_food_user_likes where burger_id = :burger_id";
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
}
