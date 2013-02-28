@foreach ($profiles as $value)

 {{ $value->name }}
  <a href="{{ URL::to("profile/". $value->id."/edit") }}" class="btn btn-mini" alt="Edit">
                        <i class="icon-edit"></i> Edit
                    </a> 
  @endforeach