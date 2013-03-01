
 {{ Form::open('profile/new', 'POST') }}

      {{ Form::token() }}
      <table>
      <tr>
      <td>
        {{ Form::label('name','Accessible Name') }}
        {{ Form::text('name') }}
     </td>
      
      <td>
      	{{ Form::label('country','Select Country') }}
        {{ Form::text('country') }}
       </td>
       <td>
        {{ Form::label('state','Select State') }}
        {{ Form::select('state', $states) }}
     	</td>
     	<td>
     	{{ Form::label('city','City') }}
        {{ Form::text('city') }}
		</td>
		<td>
        {{ Form::label('zipcode','Zip') }}
        {{ Form::text('zipcode') }}
       </td>
       <td>
        {{ Form::label('kind','Kind') }}
        {{ Form::text('kind') }}
		</td>
		<td>
        {{ Form::label('sex','Sex') }}
        {{ Form::text('sex') }}
		</td>
		<td>
        {{ Form::label('race','Race') }}
        {{ Form::text('race') }}
		</td>
		<td>
        {{ Form::label('pure_bread','Pure Bred') }}
        {{ Form::text('pure_bread') }}
		</td>
		<td>
        {{ Form::label('papers','Have Papers') }}
        {{ Form::text('papers') }}
		</td>
		<td>
        {{ Form::label('type','Profile Type') }}
        {{ Form::text('type') }}
		</td>
		<td>
        {{ Form::label('amount','Amount') }}
        {{ Form::text('amount') }}
 		</td>
 		<td>
        {{ Form::label('negotiable','Negotiable') }}
        {{ Form::text('negotiable') }}
		</td>
        <td>
        {{ Form::label('picture1','Select the file to upload') }}
        {{ Form::file('picture1') }}
       </td>
		<td>
        {{ Form::label('picture2','Select the file to upload') }}
        {{ Form::file('picture2') }}
		</td>
		<td>
        {{ Form::label('picture3','Select the file to upload') }}
        {{ Form::file('picture3') }}
		</td>
		<td>
        {{ Form::label('picture4','Select the file to upload') }}
        {{ Form::file('picture4') }}

		 </td>
		 <td>
        {{ Form::label('details','Description') }}
        {{ Form::textArea('details') }}
		</td>
		<td>
        {{ Form::label('email','Email') }}
        {{ Form::text('email') }}
		</td>
		<td>
        {{ Form::label('phone','Phone') }}
        {{ Form::text('phone') }}
		</td>
		</tr>
		</table>
      <div class="submit_sect">
      {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}
