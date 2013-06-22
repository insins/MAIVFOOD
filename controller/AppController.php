<?php
// set to online path
require_once('/Applications/MAMP/htdocs/smarty/libs/Smarty.class.php');

class AppController
{

    public function __construct()
    {
        $this->page = isset($_GET['page']) ? $_GET['page'] : "campaign";
        $this->action = isset($_GET['action']) ? $_GET['action'] : '';
        $this->decade = isset($_GET['decade']) ? $_GET['decade'] : '';
        $this->smarty = new Smarty();
        $this->smarty->setCompileDir(Config::CPL_DIR);
        $this->smarty->setTemplateDir(Config::TPL_DIR);
    }

    public function filter()
    {
        return $this->smarty->fetch('pages' . DS . 'partials' . DS . '404.htm');
    }

    public function render()
    {
        // menu
        $this->smarty->assign('menu',Config::getMenu());
        //content
        $this->smarty->assign('content',$this->filter());
        $this->smarty->assign('page', $this->page);
        $this->smarty->display('index.htm');
    }
}

?>