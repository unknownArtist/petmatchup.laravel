@layout('layouts.default')
@section('content')
 {{ Form::open_for_files('profile/'.$profile->id.'/edit', 'POST') }}
  {{ Form::hidden('id', $profile->id) }}

      {{ Form::token() }}
      
        {{ Form::label('name','Accessible Name') }}
        {{ Form::text('name',$profile->name) }}
      
      <br>
       
        {{ Form::label('country','Select Country') }}
        {{ Form::select('country',array('1'=>'America'),$profile->country) }}
        
        <br>
        {{ Form::label('state','Select State') }}
        {{ Form::select('state', $states,$profile->state) }}
       <br>
       
      {{ Form::label('city','City') }}
        {{ Form::text('city',$profile->city) }}
     
     <br>
        {{ Form::label('zipcode','Zip') }}
        {{ Form::text('zipcode',$profile->zipcode) }}
        
        <br>
        {{ Form::label('kind','Kind') }}
        {{ Form::text('kind',$profile->kind) }}
     
     <br>
        {{ Form::label('sex','Sex') }}
        {{ Form::select('sex',array('Male'=>'Male','Female'=>'Female'),$profile->sex) }}
     
     <br>
        {{ Form::label('race','Race') }}
        {{ Form::text('race',$profile->race) }}
     <br>
     
        {{ Form::label('pure_bread','Pure Bred') }}
        {{ Form::select('pure_bread',array('1'=>'Yes','0'=>'No'),$profile->pure_bread ) }}
     <br />
     
        {{ Form::label('papers','Have Papers') }}
        {{ Form::select('papers',array('1'=>'Yes','0'=>'No'),$profile->papers) }}
     
     <br />
        {{ Form::label('type','Profile Type') }}
        {{ Form::select('type',array('1'=>'Form Mating','2'=>'For Sale','3'=>'Adoption','4'=>'Showcase'),$profile->type) }}
     <br />
     
        {{ Form::label('amount','Amount') }}
        {{ Form::text('amount',$profile->amount) }}
     <br />
     
        {{ Form::label('negotiable','Negotiable') }}
        {{ Form::select('negotiable',array('1'=>'Yes','0'=>'No'),$profile->negotiable) }}
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
        {{ Form::text('email',$profile->email) }}
     
     <br />
        {{ Form::label('phone','Phone') }}
        {{ Form::text('phone',$profile->phone) }}
     

      <div class="submit">
      {{ Form::submit('Update Profile', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>
      {{ HTML::link('profile','Back')}}

    {{ Form::close() }}
@endsection