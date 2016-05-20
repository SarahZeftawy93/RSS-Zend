<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->model = new  Application_Model_DbTable_RSS();
    }

    public function indexAction()
    {
        // show news in home page
        $feeds=$this->model->listRSS();
        foreach ($feeds as $key => $value) {
        	$rssURL = new Zend_Feed_Rss($value['link']);
        }
        
        
         $this->view->news = $rssURL;
    }


}

