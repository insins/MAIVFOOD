<?php
class Config
{
    const TPL_DIR = "bulk/templates";
    const CPL_DIR = "bulk/compile";

    // db consts

    const DB_TYPE = 'mysql';
    const DB_HOST = 'mysqlstudent'; // mysqlstudent
    const DB_USER = 'tychomartiwahwu3';
    const DB_PASS = 'Aegadaeh5yee';
    const DB_NAME = 'tychomartiwahwu3';
    const DB_PORT = 3306;

    /*const DB_TYPE = 'mysql';
    const DB_HOST = 'localhost'; // mysqlstudent
    const DB_USER = 'ines';
    const DB_PASS = 'test';
    const DB_NAME = '20122013_food';
    const DB_PORT = 3306;*/

    function __construct(){
        
    }

    public static function getMenu(){
        return array(
            array(
                "page_id"=>"campaign",
                "link_text"=>"Campaign"
            ),
            array(
                "page_id"=>"create",
                "link_text"=>"Create a burger"
            ),
            array(
                "page_id"=>"gallery",
                "link_text"=>"Gallery",
                "submenu"=> array(
                    array(
                        "page_id"=>"50",
                        "link_text"=>"The 50s"
                    ),
                    array(
                        "page_id"=>"80",
                        "link_text"=>"The 80s"
                    ),
                    array(
                        "page_id"=>"00",
                        "link_text"=>"The 00s"
                    )
                )
            )
        );
    }

}
?>