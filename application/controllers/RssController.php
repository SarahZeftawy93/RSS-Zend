<?php

class RssController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
		$this->model = new  Application_Model_DbTable_RSS();
	}

	public function indexAction()
	{
		$links=$this->model->listRSS();

		$form = new Application_Form_AddRss();

		if($this->getRequest()->isPost()){
			if($form->isValid($this->getRequest()->getParams())){
				$link = $form->getValues();

				if ($this->model->addRSS($link))
				{
					$this->redirect('Rss');
				}
			}

		}
		$this->view->form = $form;
		$this->view->Rss=$links;

	}

	public function deleteAction()
	{
		$id=$this->getRequest()->getParam('id');

		if($this->model->deleteRSS($id))
		{
			$this->redirect('Rss');
		}
	}

	public function editAction()
	{
		$form = new Application_Form_AddRss();
		$id=$this->getRequest()->getParam('id');
		$this->view->form = $form;

		if($this->getRequest()->isPost()){
			if($form->isValid($this->getRequest()->getParams())){
				$link = $form->getValues();
				
				if ($this->model->editRSS($link, $id))
				{

					// $this->redirect('Rss');
				}
				$this->redirect('Rss');
			}

		}

	}


}

