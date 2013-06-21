<?php
class CampaignController extends AppController
{
    function __construct()
    {
        parent::__construct();
    }

    function filter()
    {
        switch($this->action)
        {
            default:
            return $this->smarty->fetch('pages/campaign.tpl');
            break;
        }
    }
}

?>