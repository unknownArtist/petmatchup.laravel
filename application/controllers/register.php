<?php

class Register_Controller extends Base_Controller {

 public $restful = true;

    public function __construct()
    {
        $this->filter('before', 'csrf')->on('post');
    }
   
    public function get_register()
    {
        return View::make('register.register');
    }


 public function post_register()
    {
        $user = Input::get();


        $rules = array(
        	
            'email' => 'required|email',
            'password' => 'required|min:5|max:32',
            'password_confirm' => 'required|min:5|max:32|same:password',
        );

        $v = Validator::make($user, $rules);

        if($v->fails())
        {
            return Redirect::to_route('register')->with_errors($v)->with_input();
        }

        $user = User::create(array('f_name' =>Input::get('f_name'),
        	'l_name' => Input::get('l_name'),
            'email' => Input::get('email'),
            'password' => Input::get('password')));
 
  //       Config::set('messages::config.transports.smtp.host', 'smtp.gmail.com');
		// Config::set('messages::config.transports.smtp.port', 465);
		// Config::set('messages::config.transports.smtp.username', 'habibsehrish@gmail.com');
		// Config::set('messages::config.transports.smtp.password', 'h8lovestory');
		// Config::set('messages::config.transports.smtp.encryption', 'ssl');

		// Message::to('habibsehrish@gmail.com')
		//     ->from('habibsehrish@gmail.com','Bob Marley')
		//     ->subject('Hello!')
		//     ->body('gddfgd')
		//     ->send();
        // $create = array(
        // 	'f_name' => $user['f_name'],
        // 	'l_name' => $user['l_name'],
        //     'email' => $user['email'],
        //     'password' => $user['password'],
        // );

        // $status = null;
        // try
        // {
        //     $status = Sentry::user()->create($create, true);

        //     if($status)
        //     {
        //         $link = URL::to('register/activate/' . $status['hash']);
                Message::to('habibsehrish@gmail.com')
                    ->from('no-reply@e.mp', 'EmpireCRM Admin')
                    ->subject('New User Registration')
                    ->body('whatever')
                    ->send();
                    
        //         return Redirect::to_route('login')->with("message", "Registration successful, please check email for activation link");
        //     }
        // }
        // catch(Sentry\SentryException $e)
        // {
        //     if($e->getCode() == 11)
        //     {
        //         return Redirect::to_route('register')->with('email_exists', true);
        //     }

        //     $status = $e->getMessage();
        // }

        // return Redirect::to_route('register')->with('message', $status);
    }

 

}