 {{ Form::open('login', 'POST') }}

      {{ Form::token() }}

      {{ Form::text('email', Input::Old('email') , array('id'=>'email', 'class' => 'input-block-level', 'placeholder' => 'Email')) }}

      {{ Form::text('password', Input::Old('password') , array('id'=>'password', 'class' => 'input-block-level', 'placeholder' => 'Password')) }}

      <div class="submit_sect">
      {{ Form::submit('Sign In', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}

