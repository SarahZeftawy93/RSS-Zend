<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initRequest() {
            $this->bootstrap('FrontController');
            $front = $this->getResource('FrontController');
            $request = new Zend_Controller_Request_Http();
            $front->setRequest($request);
        }
	protected function _initPlaceholders()
	{

		$this->bootstrap('View');
		$view = $this->getResource('View');
		$view->headTitle('News')->setSeparator(' :: ');
		$view->headLink()->prependStylesheet($view->baseUrl().'/css/bootstrap.min.css');
		
	}


}

