<?php

class FormController
{
    /**
     * Registration page with form
     */
    public function index()
    {        
        $view = new View();
        //$view->layout('layout');
        $view->render('form');
                
    }

    /**
     * Form submit
     */
    public function submit()
    {
      
    }
    
    
    public function form()
    {        
        $view = new View();
        //$view->layout('layout');
        $view->render('thankyou');
                
    }
  
    

}