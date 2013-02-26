

 {{ Form::open('auth/register', 'POST') }}

      {{ Form::token() }}
      
       {{ Form::text('f_name', Input::Old('f_name') , array('id'=>'f_name', 'class' => 'input-block-level', 'placeholder' => 'First Name')) }}

       {{ Form::text('l_name', Input::Old('l_name') , array('id'=>'l_name', 'class' => 'input-block-level', 'placeholder' => 'Last Name')) }}

      {{ Form::text('email', Input::Old('email') , array('id'=>'email', 'class' => 'input-block-level', 'placeholder' => 'Email address')) }}

      {{ Form::text('friend1', Input::Old('friend1') , array('id'=>'friend1', 'class' => 'input-block-level', 'placeholder' => 'Email address')) }}

      <div class="submit_sect">
      {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}



