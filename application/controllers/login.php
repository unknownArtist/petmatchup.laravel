<?php

class Login_Controller extends Base_Controller {

 public $restful = true;

    
 	public function get_login()
    {
        return View::make('login.login');
    }

    public function post_login()
    {
    	$credentials = array(
    	'username' => Input::get('email'),
        'password' => Input::get('password'),
    	);
    	

		if (Auth::attempt($credentials))
		{
			return "You're logged in!";
	     
		}
	
        else
        {
        	return Redirect::to('login');
        }
       

    }


















}