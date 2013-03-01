{{ Form::open('search/index', 'POST') }}

      {{ Form::token() }}
      <table>
      <tr>
     <td>
        {{ Form::label('type','Profile Type') }}
        {{ Form::text('type') }}
    </td>

     <td>
        {{ Form::label('kind','Kind') }}
        {{ Form::text('kind') }}
    </td>

    <td>
        {{ Form::label('race','Race') }}
        {{ Form::text('race') }}
    </td>

    <td>
        {{ Form::label('sex','Sex') }}
        {{ Form::text('sex') }}
    </td>

      <td>
      	{{ Form::label('country','Select Country') }}
        {{ Form::text('country') }}
       </td>
       <td>
        {{ Form::label('state','Select State') }}
        {{ Form::select('state',$states) }}
     	</td>
     	<td>
     	{{ Form::label('city','City') }}
        {{ Form::text('city') }}
		</td>
		<td>
        {{ Form::label('zipcode','Zip') }}
        {{ Form::text('zipcode') }}
       </td>
       

		</tr>
		</table>
      <div class="submit_sect">
      {{ Form::submit('Search', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}
