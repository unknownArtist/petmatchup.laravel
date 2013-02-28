@layout('layouts.default')
@section('content')

<div class="contactus">
 {{ Form::open('contact', 'POST') }}

      {{ Form::token() }}
      
    	{{ Form::label('name', 'Name:') }} &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
       {{ Form::text('name', Input::Old('name') , array('id'=>'name', 'class' => 'input-block-level', 'placeholder' => 'Name')) }}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
		
        {{ Form::label('email', 'Your Email Address:') }} &nbsp; 
      {{ Form::text('email', Input::Old('email') , array('id'=>'email', 'class' => 'input-block-level', 'placeholder' => 'Email address')) }}<br />
		
        {{ Form::label('phone', 'Phone:') }} &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 	
      {{ Form::text('phone', Input::Old('phone') , array('id'=>'phone', 'class' => 'input-block-level', 'placeholder' => 'Phone')) }}<br /><br />
      
        {{ Form::label('message', 'Message:') }} &nbsp;<br />
      {{ Form::textarea('message', Input::Old('message') , array('id'=>'message', 'class' => 'input-block-level')) }}

      <div class="contactbtn">
      {{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}
	</div>

@endsection