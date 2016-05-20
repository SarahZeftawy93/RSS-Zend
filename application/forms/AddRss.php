<?php

class Application_Form_AddRss extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $link = new Zend_Form_Element_Text('link');
		$link->setRequired();
		$link->setLabel('Add RSS Link');	
		$link->setAttrib('class', 'form-control col-1g-6');		
		$submit = new Zend_Form_Element_Submit('Add RSS');
		$submit->setAttrib('class', 'btn btn-primary col-sm-offset-3 col-sm-5');
		$this->addElements(array($link,$submit));
    }


}

