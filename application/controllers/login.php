<?php

class Login_Controller extends Base_Controller {

 public $restful = true;

    
 	public function get_login()
    {
        return View::make('login.login');
    }

    public function post_login()
    {
    	
    	if(Auth::attempt(array(	'username' => Input::get('email'),	'password' => Input::get('password'))))
		{		
			echo "User is logged in!";
		}
		
        else
        {
        	return Redirect::to('login');
        }
       
    }


















}