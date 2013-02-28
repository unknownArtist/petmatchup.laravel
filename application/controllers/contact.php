<?php

class Contact_Controller extends Base_Controller {

 public $restful = true;

    
 	public function get_index()
    {
        return View::make('contact.index');
    }

    public function post_index()
    {

    	 Message::to('contact@petmatchup.com', "petmatchup")
                ->from(Input::get('email'), Input::get('name'))
                ->subject('Query')
                ->body(Input::get('message').'<br><br><br>'. 'Phone Number:' .Input::get('phone'))
                ->html(true)
                ->send();

        //return View::make('contact.index');
    }
}