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
    public function checkUserExistance($user_id){

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
                   //trace ($e->getMessage());
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

    /*  ------------------------------------
           INSERTEN BURGER
        ------------------------------------ */
    // wist niet wat inpakt ging zijn op uw code dus even geduped
    public function checkUserExistanceReturnsState($user_id){

        $sql = "SELECT * FROM maiv_food_users WHERE user_id = :user_id";

        try{
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(":user_id", $user_id);
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
            //trace ($e->getMessage());
            return $e->getMessage();
        }
    }

        public function insertBurgerForUser($userId,$details)
        {
            //#1// kijken of user in database zit
            try{
                $result = $this->checkUserExistanceReturnsState($userId);
                if($result)
                {
                    try
                    {
                        $sql = "INSERT INTO maiv_food_burgers (breadbun_id,meat_id,vegetable_id,salad,tomato,burger_decade,user_id)";
                        $sql .= "VALUES (:breadbun_id,(SELECT id FROM maiv_food_meats WHERE meat_name = :meat_name),";
                        $sql .= "(SELECT id FROM maiv_food_vegetables WHERE vegetable_name = :vegetable_name),:salad,:tomatoe,:decade,:user_id)";

                        $stmt = $this->dbh->prepare($sql);
                        $params = array(
                            ":breadbun_id"=>$details['bun'],
                            ":meat_name"=>$details['meat'],
                            ":vegetable_name"=>$details['mainvegetable'],
                            ":salad"=>1,
                            ":tomatoe"=>0,
                            ":decade"=>$details['decade'],
                            ":user_id"=>$userId
                        );

                        if($stmt->execute($params))
                        {
                            $result = "Het lukte de hamburger erin te steken";
                        }

                    }catch (PDOException $e)
                    {
                        return $e->getMessage() .'\n'. $e->getCode() .'\n'. $e->getLine();
                    }

                } else
                {
                    try
                    {
                        $result = $this->insertUser($details['userdata']);
                    }catch (PDOException $e){
                        return "inserten van nieuwe user mislukt";
                    }
                }
            }catch (PDOException $e)
            {
                return "Chekken of user bestaat mislukt";
            }
            return $result;
        }

    /*  ------------------------------------
           GEEF DE USER MEE VOOR DE BURGER ID
        ------------------------------------ */
        public function getUserForBurgerID($user_id){

            $sql = "SELECT first_name, last_name FROM `maiv_food_users` WHERE user_id = :user_id";
            try{

              $stmt = $this->dbh->prepare($sql);
              $stmt->bindValue(":user_id", $user_id);
              $stmt->execute();
              $result = $stmt->fetch();

              // Als het resultaat niet "" is dan id ophalen, anders -1
              return $result;

              }
              catch(PDOException $e) {
                  //trace ($e->getMessage());
                  return $e->getMessage();
              }

        }


    /* ALLE USERS FOR SEARCHQUERY */
    public function getAllUsersForSearchQuery($query, $decade){

           $sql = "SELECT maiv_food_users.user_id, first_name, last_name, maiv_food_burgers.id,  maiv_food_burgers.burger_decade FROM maiv_food_users
                      INNER JOIN maiv_food_burgers
                      ON  maiv_food_users.user_id =maiv_food_burgers.user_id
                      WHERE maiv_food_burgers.burger_decade = :decade AND  maiv_food_users.first_name LIKE :query OR
                      maiv_food_users.last_name like :query";

           try{

             $stmt = $this->dbh->prepare($sql);
             $stmt->bindValue(":query", $query);
             $stmt->bindValue(":decade", $decade);
             $stmt->execute();
             $result = $stmt->fetchAll();

             // Als het resultaat niet "" is dan id ophalen, anders -1
             return $result;

             }
             catch(PDOException $e) {
                 //trace ($e->getMessage());
                 return $e->getMessage();
             }


    }


}
