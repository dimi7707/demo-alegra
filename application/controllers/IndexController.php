<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	
    	$myArray = array('firstname' =>  'Dimitri', 
    						'lastname' =>  'Avila',
    						'seniority' => 10,
    						'dep' => "Management",
    						'hired' => "01/10/2016"	 
    						 );

        $this->view->mensaje = json_encode($myArray);
        
        
    }
 


    

}

