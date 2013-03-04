<?php

class Search_Controller extends Base_Controller
{


public $restful = true;
    
    // Filter
    public function __constructor()
    {
        $this->filter('before', 'csrf')->on('post');
    }
    public function get_index()
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
    
	 return View::make('search.index')
	 ->with('states',$states);      
      
    }
    public function post_index()
    {
     
       // $profiles = Profile::where('user_id','=',Auth::user()->id)
      $profiles = 
      Profile::where('type', 'LIKE',    Input::get('type'))
       			 ->where('kind', 'LIKE',    Input::get('kind'))
     				 ->where('race','LIKE',     Input::get('race'))
     				 ->where('sex','LIKE',      Input::get('sex'))
     				 ->where('country','LIKE',  Input::get('country'))
     				 ->where('state','LIKE',    Input::get('state'))
     				 ->where('city','LIKE',     Input::get('city'))
     				 ->where('zipcode','LIKE',  Input::get('zipcode'))
       			 ->get();
       print_r($profiles);
    }






}