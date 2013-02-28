@layout('layouts.default')
@section('content')


	<div class="register">
 {{ Form::open('auth/register', 'POST') }}

      {{ Form::token() }}
      
    	{{ Form::label('fname', 'First Name:') }} &nbsp; &nbsp; &nbsp; 
       {{ Form::text('f_name', Input::Old('f_name') , array('id'=>'f_name', 'class' => 'input-block-level', 'placeholder' => 'First Name')) }}
		
        {{ Form::label('lname', 'Last Name:') }}  &nbsp; &nbsp; &nbsp; &nbsp;
       {{ Form::text('l_name', Input::Old('l_name') , array('id'=>'l_name', 'class' => 'input-block-level', 'placeholder' => 'Last Name')) }}
		
        {{ Form::label('email', 'Email Address:') }} &nbsp;	
      {{ Form::text('email', Input::Old('email') , array('id'=>'email', 'class' => 'input-block-level', 'placeholder' => 'Email address')) }}
		
        {{ Form::label('email', 'Email Address:') }} &nbsp;
      {{ Form::text('friend1', Input::Old('friend1') , array('id'=>'friend1', 'class' => 'input-block-level', 'placeholder' => 'Email address')) }}

      <div class="registerbtn">
      {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}
	</div>
@endsection

