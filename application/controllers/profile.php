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
      
        $states = array('1'=>"Alabama",  
   '2'=>"Alaska",  
   '3'=>"Arizona",  
   '4'=>"Arkansas",  
   '5'=>"California",  
   '6'=>"Colorado",  
   '7'=>"Connecticut",  
   '8'=>"Delaware",  
   '9'=>"District Of Columbia",  
   '10'=>"Florida",  
   '11'=>"Georgia",  
   '12'=>"Hawaii",  
   '13'=>"Idaho",  
   '14'=>"Illinois",  
   '15'=>"Indiana",  
   '16'=>"Iowa",  
   '17'=>"Kansas",  
   '18'=>"Kentucky",  
   '19'=>"Louisiana",  
   '20'=>"Maine",  
   '21'=>"Maryland",  
   '22'=>"Massachusetts",  
   '23'=>"Michigan",  
   '24'=>"Minnesota",  
   '25'=>"Mississippi",  
   '26'=>"Missouri",  
   '27'=>"Montana",
   '28'=>"Nebraska",
   '29'=>"Nevada",
   '30'=>"New Hampshire",
   '31'=>"New Jersey",
   '32'=>"New Mexico",
   '33'=>"New York",
   '34'=>"North Carolina",
   '35'=>"North Dakota",
   '36'=>"Ohio",  
   '37'=>"Oklahoma",  
   '38'=>"Oregon",  
   '39'=>"Pennsylvania",  
   '40'=>"Rhode Island",  
   '41'=>"South Carolina",  
   '42'=>"South Dakota",
   '43'=>"Tennessee",  
   '44'=>"Texas",  
   '45'=>"Utah",  
   '46'=>"Vermont",  
   '47'=>"Virginia",  
   '48'=>"Washington",  
   '49'=>"West Virginia",  
   '50'=>"Wisconsin",  
   '51'=>"Wyoming");
    	 return View::make('profile.new')
         ->with('states', $states);
    }

       public function post_new()
    {

    	$fields = array(
            "name"        => Input::get('name'),
            "country"     => Input::get('country'),
            "state"       => Input::get('state'),
            "city"        => Input::get('city'),
            "zipcode"     => Input::get('zipcode'),
            "kind"        => Input::get('kind'),
            "sex"         => Input::get('sex'),
            "race"        => Input::get('race'),
            "pure_bread"  => Input::get('pure_bread'),
            "papers"      => Input::get('papers'),
            "type"        => Input::get('type'),
            "amount"      => Input::get('amount'),
            "negotiable"  => Input::get('negotiable'),
            "email"       => Input::get('email'),
            "phone"       => Input::get('phone'), 
            'user_id'     => Auth::user()->id,     
        );

      $rules = array(
          'name'      => 'required',
          'zipcode'   => 'required',
          'email'     => 'required|email',
          'phone'     => 'required',
          );


        // $profile = new Profile($fields);
      $validation = Validator::make($fields, $rules);
      if($validation->fails())
      {
        return Redirect::to('profile/new')->with_errors($validation)->with_input();
      }
      $profile = Profile::create($fields);
      
      for ($i=1; $i <= 4 ; $i++) {
           $imageName = $this->imageCrop('picture'.$i);
           Profilepics::create(array('picture'=>$imageName,'profile_id'=>Auth::user()->id));
      }
      
      return Redirect::to('profile')->with('message',"Profile added");

}

public function get_edit()
{
       $states = array('1'=>"Alabama",  
   '2'=>"Alaska",  
   '3'=>"Arizona",  
   '4'=>"Arkansas",  
   '5'=>"California",  
   '6'=>"Colorado",  
   '7'=>"Connecticut",  
   '8'=>"Delaware",  
   '9'=>"District Of Columbia",  
   '10'=>"Florida",  
   '11'=>"Georgia",  
   '12'=>"Hawaii",  
   '13'=>"Idaho",  
   '14'=>"Illinois",  
   '15'=>"Indiana",  
   '16'=>"Iowa",  
   '17'=>"Kansas",  
   '18'=>"Kentucky",  
   '19'=>"Louisiana",  
   '20'=>"Maine",  
   '21'=>"Maryland",  
   '22'=>"Massachusetts",  
   '23'=>"Michigan",  
   '24'=>"Minnesota",  
   '25'=>"Mississippi",  
   '26'=>"Missouri",  
   '27'=>"Montana",
   '28'=>"Nebraska",
   '29'=>"Nevada",
   '30'=>"New Hampshire",
   '31'=>"New Jersey",
   '32'=>"New Mexico",
   '33'=>"New York",
   '34'=>"North Carolina",
   '35'=>"North Dakota",
   '36'=>"Ohio",  
   '37'=>"Oklahoma",  
   '38'=>"Oregon",  
   '39'=>"Pennsylvania",  
   '40'=>"Rhode Island",  
   '41'=>"South Carolina",  
   '42'=>"South Dakota",
   '43'=>"Tennessee",  
   '44'=>"Texas",  
   '45'=>"Utah",  
   '46'=>"Vermont",  
   '47'=>"Virginia",  
   '48'=>"Washington",  
   '49'=>"West Virginia",  
   '50'=>"Wisconsin",  
   '51'=>"Wyoming");
        $id = URI::segment(2);
       
       
        $profile = Profile::find($id);
       
     
        return View::make('profile.edit')
                    ->with('profile',$profile)
                    ->with('states', $states);
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
            $profile->phone = $fields['phone'];       
       
            $profile->save();
            return Redirect::to('profile')
                        ->with('message', 'Profile Updated Successfully');
         
}

        public function get_delete()
        {
        
        $profile = Profile::find(URI::segment(2));
        $profile->delete();
        return Redirect::to('profile')
                        ->with('message', 'Deleted Successfully');
        }


    }


















