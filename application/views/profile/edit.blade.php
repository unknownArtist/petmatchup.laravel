 {{ Form::open('profile/'.$profile->id.'/edit', 'POST') }}
  {{ Form::hidden('id', $profile->id) }}

      {{ Form::token() }}
      <table>
      <tr>
      <td>
        {{ Form::label('name','Accessible Name') }}
        {{ Form::text('name',$profile->name) }}
     </td>
      
      <td>
      	{{ Form::label('country','Select Country') }}
        {{ Form::text('country',$profile->country) }}
       </td>
       <td>
        {{ Form::label('state','Select State') }}
        {{ Form::text('state',$states) }}
     	</td>
     	<td>
     	 {{ Form::label('city','City') }}
        {{ Form::text('city', $profile->city) }}
		</td>
		<td>
        {{ Form::label('zipcode','Zip') }}
        {{ Form::text('zipcode', $profile->zipcode) }}
       </td>
       <td>
        {{ Form::label('kind','Kind') }}
        {{ Form::text('kind', $profile->kind) }}
		</td>
		<td>
        {{ Form::label('sex','Sex') }}
        {{ Form::text('sex', $profile->sex) }}
		</td>
		<td>
        {{ Form::label('race','Race') }}
        {{ Form::text('race', $profile->race) }}
		</td>
		<td>
        {{ Form::label('pure_bread','Pure Bred') }}
        {{ Form::text('pure_bread', $profile->pure_bread) }}
		</td>
		<td>
        {{ Form::label('papers','Have Papers') }}
        {{ Form::text('papers', $profile->papers) }}
		</td>
		<td>
        {{ Form::label('type','Profile Type') }}
        {{ Form::text('type', $profile->type) }}
		</td>
		<td>
        {{ Form::label('amount','Amount') }}
        {{ Form::text('amount', $profile->amount) }}
 		</td>
 		<td>
        {{ Form::label('negotiable','Negotiable') }}
        {{ Form::text('negotiable', $profile->negotiable) }}
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
        {{ Form::textArea('details', $profile->details) }}
		</td>
		<td>
        {{ Form::label('email','Email') }}
        {{ Form::text('email', $profile->email) }}
		</td>
		<td>
        {{ Form::label('phone','Phone') }}
        {{ Form::text('phone',$profile->phone) }}
		</td>
		</tr>
		</table>
      <div class="submit_sect">
      {{ Form::submit('Update', array('class'=>'btn btn-large btn-primary align-right')) }}
      </div>

    {{ Form::close() }}
