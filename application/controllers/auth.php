<?php

class Auth_Controller extends Base_Controller {

 public $restful = true;

    public function __construct()
    {
        $this->filter('before', 'csrf')->on('post');
    }
   
    public function get_register()
    {
       return View::make('auth.auth');
    }


    public function post_register()
    {

        $user = Input::get();
        $rules = array(
            'email' => 'required|email|unique:users',
            'friend1' => 'required|email',
        );
        $v = Validator::make($user, $rules);

        if($v->fails())
        {
            return Redirect::to_route('register')->with_errors($v)->with_input();
        }
        
        $number = Str::random(15);
        $hash = Hash::make('number');
        
            Message::to(Input::get('email'))
                ->from('no-reply@e.mp', 'EmpireCRM Admin')
                ->subject('New User Registration')
                ->body($number)
                ->send();
            
        $user = User::create(array('f_name' =>Input::get('f_name'),
                                   'l_name' => Input::get('l_name'),
                                   'email' => Input::get('email'),
                                   'password' => $hash,
                                   'friend1' => Input::get('friend1')));
      
    } 

}