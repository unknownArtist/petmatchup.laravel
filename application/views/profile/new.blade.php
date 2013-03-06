@layout('layouts.default')
@section('content')

<div class="profile">
 {{ Form::open_for_files('profile/new', 'POST') }}

      {{ Form::token() }}
   
       
        {{ Form::label('name','Accessible Name') }}&nbsp;
        {{ Form::text('name') }}
      
      <br>
       
      	{{ Form::label('country','Select Country') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('country',array('1'=>'America')) }}
        
        <br>
        {{ Form::label('state','Select State') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('state', $states) }}
     	 <br>
     	 
     	{{ Form::label('city','City') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('city',Input::Old('city')) }}
		 
		 <br>
        {{ Form::label('zipcode','Zip') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('zipcode',Input::Old('zipcode')) }}
        
        <br>
        {{ Form::label('kind','Kind') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('kind',Input::Old('kind')) }}
		 
		 <br>
        {{ Form::label('sex','Sex') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('sex',array('Male'=>'Male','Female'=>'Female')) }}
		 
		 <br>
        {{ Form::label('race','Race') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('race',Input::Old('race')) }}<br />
		


		 
        {{ Form::label('purebread','Pure Bred') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('pure_bread',array('1'=>'Yes','0'=>'No')) }}
		 <br />
		 
        {{ Form::label('papers','Have Papers') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('papers',array('1'=>'Yes','0'=>'No')) }}
		 
		 <br />
        {{ Form::label('type','Profile Type') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('type',array('1'=>'Form Mating','2'=>'For Sale','3'=>'Adoption','4'=>'Showcase')) }}
		 <br />
		 
        {{ Form::label('amount','Amount') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('amount',Input::Old('amount')) }}
 		 <br />
 		 
        {{ Form::label('negotiable','Negotiable') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('negotiable',array('1'=>'Yes','0'=>'No')) }}
		 <br />
         
         <div class="noborder">
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
<br /></div>
		  
	 
        {{ Form::label('email','Email') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('email',Input::Old('email')) }}
		 
		 <br />
        {{ Form::label('phone','Phone') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('phone',Input::Old('phone')) }}
     
     <div class="profilebtn">
      {{ Form::submit('Add Profile') }}
      {{ HTML::link('profile','Back')}}
      </div>
      

    {{ Form::close() }}
    
    </div>

@endsection
