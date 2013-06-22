<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 21/06/13
 * Time: 21:32
 * To change this template use File | Settings | File Templates.
 */


class UserDAO
{

    public $dbh;
       public function __construct()
       {
           $this->dbh = DatabasePDO::getInstance();
       }

    /*  ------------------------------------
        CHECKEN OF DE USER AL IN DE DB STAAT
        ------------------------------------ */
    public function checkInDatabase($user_id){

        $sql = "SELECT * FROM maiv_food_users WHERE user_id = :user_id";

        try{
               $stmt = $this->dbh->prepare($sql);
               $stmt->bindValue(":user_id", $user_id);
               $stmt->execute();
               $result = $stmt->fetch();

                // Als het resultaat niet "" is dan id ophalen, anders -1
                if ($stmt->rowCount() > 0) {
                       return $result['user_id'];
                   } else {
                       return -1;
                   }

               }
               catch(PDOException $e) {
                   trace ($e->getMessage());
                   return $e->getMessage();
               }
    }


    /*  ------------------------------------
        USER INSERTEN IN DE DB
    ------------------------------------ */
    public function insertUser($user_profile){

        $sql = "INSERT INTO maiv_food_users(user_id, email, first_name, last_name) VALUES(:user_id, :email, :first_name, :last_name)";

        try{
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(":user_id", $user_profile["id"]);
            $stmt->bindValue(":first_name", $user_profile["first_name"]);
            $stmt->bindValue(":email", $user_profile["email"]);
            $stmt->bindValue(":last_name", $user_profile["last_name"]);

            $stmt->execute();
            return true;

        }
        catch(PDOException $e) {
           trace ($e->getMessage());
           return $e->getMessage();
       }
    }

}
