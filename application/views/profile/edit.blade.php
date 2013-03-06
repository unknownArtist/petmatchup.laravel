@layout('layouts.default')
@section('content')

<div class="profile">
 {{ Form::open_for_files('profile/'.$profile->id.'/edit', 'POST') }}
  {{ Form::hidden('id', $profile->id) }}

      {{ Form::token() }}
      
        {{ Form::label('name','Accessible Name') }}&nbsp;
        {{ Form::text('name',$profile->name) }}
      
      <br>
       
        {{ Form::label('country','Select Country') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('country',array('1'=>'America'),$profile->country) }}
        
        <br>
        {{ Form::label('state','Select State') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('state', $states,$profile->state) }}
       <br>
       
      {{ Form::label('city','City') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('city',$profile->city) }}
     
     <br>
        {{ Form::label('zipcode','Zip') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('zipcode',$profile->zipcode) }}
        
        <br>
        {{ Form::label('kind','Kind') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('kind',$profile->kind) }}
     
     <br>
        {{ Form::label('sex','Sex') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('sex',array('Male'=>'Male','Female'=>'Female'),$profile->sex) }}
     
     <br>
        {{ Form::label('race','Race') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('race',$profile->race) }}
     <br>
     
        {{ Form::label('pure_bread','Pure Bred') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('pure_bread',array('1'=>'Yes','0'=>'No'),$profile->pure_bread ) }}
     <br />
     
        {{ Form::label('papers','Have Papers') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('papers',array('1'=>'Yes','0'=>'No'),$profile->papers) }}
     
     <br />
        {{ Form::label('type','Profile Type') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('type',array('1'=>'Form Mating','2'=>'For Sale','3'=>'Adoption','4'=>'Showcase'),$profile->type) }}
     <br />
     
        {{ Form::label('amount','Amount') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('amount',$profile->amount) }}
     <br />
     
        {{ Form::label('negotiable','Negotiable') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::select('negotiable',array('1'=>'Yes','0'=>'No'),$profile->negotiable) }}
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
        {{ Form::text('email',$profile->email) }}
     
     <br />
        {{ Form::label('phone','Phone') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{ Form::text('phone',$profile->phone) }}
     

       <div class="profilebtn">
      {{ Form::submit('Update Profile', array('class'=>'btn btn-large btn-primary align-right')) }}

      {{ HTML::link('profile','Back')}}
            </div>

    {{ Form::close() }}
@endsection