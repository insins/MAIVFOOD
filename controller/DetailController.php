<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jones
 * Date: 22/06/13
 * Time: 16:12
 * To change this template use File | Settings | File Templates.
 */
class DetailController extends AppController
{
    function __construct(){
            parent::__construct();
        }

        function filter()
        {


            // DECADE BEPALEN
            switch($this->decade)
            {
                 case "50s":
                 $this->load50sDetail();
                 // subtemplate
                 break;

                 case "80s":
                 $this->load80sDetail();
                 break;

                 case "00s":
                 $this->load00sDetail();
                 break;

                 default:
                 $this->load50sGallery();
                 break;
            }

            // Gallery tpl inladen
            return $this->smarty->fetch('pages' . DS . 'gallery.tpl');
        }


        // --------------
        // 50S DETAIL
        // --------------
        private function load50sDetail(){


            $subtemplate = $this->smarty->fetch('pages' . DS . 'partials' . DS . 'detail50s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);


        }

        // --------------
        // 80S DETAIL
        // --------------
        private function load80sDetail(){


            $subtemplate = $this->smarty->fetch('pages/partials/detail80s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);
        }

        // --------------
        // 00S DETAIL
        // --------------
        private function load00sDetail(){


            $subtemplate = $this->smarty->fetch('pages/partials/detail00s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);
        }


        // --------------
        // 50S GALLERYYY VOOR DEFAULT
        // --------------
        private function load50sGallery(){


            $subtemplate = $this->smarty->fetch('pages' . DS . 'partials' . DS . 'gallery50s.tpl');
            $this->smarty->assign('subtemplate', $subtemplate);


        }
}
