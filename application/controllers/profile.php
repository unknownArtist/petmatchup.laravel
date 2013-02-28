<?php

class Profile_Controller extends Base_Controller
{
    public $restful = true;
    
    // Filter
    public function __constructor()
    {
        $this->filter('before', 'csrf')->on('post');
    }
    public function get_index()
    {
      
       $profiles = Profile::where('user_id','=',Auth::user()->id)->get();
       
       return View::make('profile.index')->with('profiles',$profiles);

    }
    public function post_index()
    {
     
    // $profiles = Profile::where('user_id','=',);
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

        $profile = new Profile($fields);
        $profile->save();

//        $pic1 = Input::get('picture1');
      
//        if(isset($pic1)){

//         $ext = File::extension($pic1['name']);
      
//             $imageName = "image".rand().date(time()).".".$ext;
//             try {
//                 $success = Resizer::open($pic1)
//                     ->resize(200, 200, 'auto')
//                     ->save($_SERVER['DOCUMENT_ROOT'] . "/" . "img/" . $imageName, 90);
// //                    ->save($_SERVER['DOCUMENT_ROOT'] . "/empire/public/" . "uploads/companyimages/" . $imageName, 90);

//                 if ($success) {
//                   echo "image uploaded";
                  
//                 } else {
//                   echo "image not uploaded";
//                     //return Redirect::to('admin/alert/new')->with('error', 'Image not uploaded.');
//                 }
//             } catch (Exception $e) {
//               echo "resizer didnt work";
//               //  return Redirect::to('admin/alert/new')->with('error', $e->getMessage());
//             }
       
           
         // $profilepic = new Profilepics($);
         // $profilepic->save();
  
//}
       
       // $pic2 = Input::get('picture2');
       //  if(isset($pic2)){
       	
       // }
       
       // $pic3 = Input::get('picture3');
       //  if(isset($pic3)){
       	
       // }
       
       // $pic4 = Input::get('picture4');
       // if(isset($pic4)){
       	
       // }
      
}

public function get_edit()
{
        $id = URI::segment(3);
        $profile = Profile::find($id);
        return View::make('profile.edit')
                    ->with('profile',$profile);
}
public function post_edit()
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
          $profile = Profile::find(Input::get('id'));
            $profile->name = $fields['name'];
            $profile->country = $fields['country'];
            $profile->state = $fields['state'];
            $profile->city = $fields['city'];
            $profile->zipcode = $fields['zipcode'];
            $profile->kind = $fields['kind'];
            $profile->sex = $fields['sex'];
            $profile->race = $fields['race'];
            $profile->pure_bread = $fields['pure_bread'];
            $profile->papers = $fields['papers'];
            $profile->type = $fields['type'];
            $profile->amount = $fields['amount'];
            $profile->negotiable = $fields['negotiable'];
            $profile->email = $fields['email'];
            $profile->phone =$fields['phone'];       
       
            $profile->save();
            return Redirect::to('profile/'.Input::get('id'))
                        ->with('message', 'Updated Successfully');
         // return Redirect::to('profile/'.Input::get('id').'/'.Input::get('cmpId').'/details')
         //                ->with('message', 'Salary Updated Successfully');
}

    }


















