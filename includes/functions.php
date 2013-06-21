<?php

    /*
    traced alles deftig weergegeven.
    */

    function trace($arg)
    {
        echo "<pre>";
        print_r($arg);
        echo "</pre>";
    }

    /*
    om de strOfTime() error af te handelen.
    */

    function muteExpectedErrors(){
        date_default_timezone_set("Europe/Brussels");
    }

?>
