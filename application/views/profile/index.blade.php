@layout('layouts.default')
@section('content')

@foreach ($profiles as $value)

 {{$value->name }}
  <a href="{{ URL::to("profile/". $value->id."/edit") }}" class="btn btn-mini" alt="Edit">
                        Edit
                    </a> 
   <a href="{{ URL::to("profile/". $value->id."/delete") }}" class="btn btn-mini" alt="Delete">
                        Delete
                    </a> 
  @endforeach

@endsection