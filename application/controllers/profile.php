<?php

class Profile_Controller extends Base_Controller
{
    public $restful = true;
    
    // Filter
    public function __constructor()
    {
        $this->filter('before', 'csrf')->on('post');
    }


     public function get_new()
    {
    	 return View::make('profile.new');
    }

       public function post_new()
    {
    	$fields = array(
            "name" => Input::get('name'),
            "country" => Input::get('country'),
            "state" => Input::get('state'),
            "city" => Input::get('city'),
            "zipcode" => Input::get('zipcode'),
            "kind" => Input::get('kind'),
            "sex" => Input::get('sex'),
            "race" => Input::get('race'),
            "pure_bread" => Input::get('pure_bread'),
            "papers" => Input::get('papers'),
            "type" => Input::get('type'),
            "amount" => Input::get('amount'),
            "negotiable" => Input::get('negotiable'),
            "email" => Input::get('email'),
            "phone" => Input::get('phone'),       
        );

        // $profile = new Profile($fields);
        // $profile->save();

       $pic1 = Input::get('picture1');

       if(isset($pic1)){
         $ext = File::extension($pic1);
       
            $imageName = "image".rand().date(time()).".".$ext;
         
                $success = Resizer::open($pic1)
                    ->resize(200, 200, 'auto')
                    ->save($_SERVER['DOCUMENT_ROOT']  . "/img/" . $imageName, 90);
            // if ($success) {

           
         // $profilepic = new Profilepics($);
         // $profilepic->save();
  //}
}
       
       $pic2 = Input::get('picture2');
        if(isset($pic2)){
       	
       }
       
       $pic3 = Input::get('picture3');
        if(isset($pic3)){
       	
       }
       
       $pic4 = Input::get('picture4');
       if(isset($pic4)){
       	
       }
      
}


    }


















