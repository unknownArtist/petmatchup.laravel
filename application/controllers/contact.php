<?php

class Contact_Controller extends Base_Controller {

 public $restful = true;

    
 	public function get_index()
    {
        return View::make('contact.index');
    }
}