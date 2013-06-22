<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 21/06/13
 * Time: 21:40
 * To change this template use File | Settings | File Templates.
 */

class DatabasePDO
{
    private static $dbh;

      static function getInstance($dbname = config::DB_NAME)
      {
          $host = config::DB_HOST;
          $user = config::DB_USER;
          $pass = config::DB_PASS;

          $dsn = config::DB_TYPE.':host='.$host.';dbname='.$dbname;
          try{
              $dbh = new PDO($dsn, $user, $pass);
              $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              return $dbh;

          }
          catch(PDOException $e){
              echo "Error!: ".$e->getMessage();
              die();
          }
      }

}
