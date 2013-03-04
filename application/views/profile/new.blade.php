@layout('layouts.default')
@section('content')

 {{ Form::open_for_files('profile/new', 'POST') }}

      {{ Form::token() }}
   
       
        {{ Form::label('name','Accessible Name') }}
        {{ Form::text('name') }}
      
      <br>
       
      	{{ Form::label('country','Select Country') }}
        {{ Form::select('country',array('1'=>'America')) }}
        
        <br>
        {{ Form::label('state','Select State') }}
        {{ Form::select('state', $states) }}
     	 <br>
     	 
     	{{ Form::label('city','City') }}
        {{ Form::text('city',Input::Old('city')) }}
		 
		 <br>
        {{ Form::label('zipcode','Zip') }}
        {{ Form::text('zipcode',Input::Old('zipcode')) }}
        
        <br>
        {{ Form::label('kind','Kind') }}
        {{ Form::text('kind',Input::Old('kind')) }}
		 
		 <br>
        {{ Form::label('sex','Sex') }}
        {{ Form::text('sex',array('Male'=>'Male','Female'=>'Female')) }}
		 
		 <br>
        {{ Form::label('race','Race') }}
        {{ Form::text('race',Input::Old('race')) }}
		


		 
        {{ Form::label('purebread','Pure Bred') }}
        {{ Form::select('pure_bread',array('1'=>'Yes','0'=>'No')) }}
		 <br />
		 
        {{ Form::label('papers','Have Papers') }}
        {{ Form::select('papers',array('1'=>'Yes','0'=>'No')) }}
		 
		 <br />
        {{ Form::label('type','Profile Type') }}
        {{ Form::select('type',array('1'=>'Form Mating','2'=>'For Sale','3'=>'Adoption','4'=>'Showcase')) }}
		 <br />
		 
        {{ Form::label('amount','Amount') }}
        {{ Form::text('amount',Input::Old('amount')) }}
 		 <br />
 		 
        {{ Form::label('negotiable','Negotiable') }}
        {{ Form::select('negotiable',array('1'=>'Yes','0'=>'No')) }}
		 <br />
         
        {{ Form::label('picture1','Select the file to upload') }}
        {{ Form::file('picture1') }}
       <br /> 
		 
        {{ Form::label('picture2','Select the file to upload') }}
        {{ Form::file('picture2') }}
		 <br />
		 
        {{ Form::label('picture3','Select the file to upload') }}
        {{ Form::file('picture3') }}
		 <br />
		 
        {{ Form::label('picture4','Select the file to upload') }}
        {{ Form::file('picture4') }}
<br />
		  
	 
        {{ Form::label('email','Email') }}
        {{ Form::text('email',Input::Old('email')) }}
		 
		 <br />
        {{ Form::label('phone','Phone') }}
        {{ Form::text('phone',Input::Old('phone')) }}
     
      {{ Form::submit('Add Profile') }}
      {{ HTML::link('profile','Back')}}
      

    {{ Form::close() }}

@endsection
