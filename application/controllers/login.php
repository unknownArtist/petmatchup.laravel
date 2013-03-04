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
			// echo "User is logged in!";
            return Redirect::to('login')->with('message','Welcome to Petmatchup');
		}
		
        else
        {
        	return Redirect::to('login')->with('error','Username or password is incorrect');
        }
       
    }
    public function get_logout()
    {
        Auth::logout();
        return Redirect::to('login')->with('message',"You are successfully logout");
    }
}