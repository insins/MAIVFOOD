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

}
