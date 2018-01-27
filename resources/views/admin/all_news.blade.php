@extends('layouts.dashboard')
@section('page_heading','All News')

@section('section')
<div class="col-sm-12">
 
<div class="row">
 <table class="table table table-hover">
	<thead>
		<tr  >
			<th style=" text-align: center;" >Title</th>
			<th style=" text-align: center;" >content</th>
			<th style=" text-align: center;" >Photos</th>
			 <th style=" text-align: center;" >action</th>

		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Boats as $Boats1)

		<tr>
			<td>{{ $Boats1->Title }}</td>
			<td><?php  $small = substr($Boats1->content , 0, 150);  echo "$small"."...."; ?>	</td>
			<td>  <img src="{{ URL::to('').'/'.$Boats1->img  }}"   height="100" width="150">  </td>
  
						<td>
  {{ Form::open(array('url' => 'admin/admin_news/'. $Boats1->id, 'class' => 'pull-right')) }}
    {{ method_field('DELETE') }}

                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                {{ Form::close() }}

                 <a target="_blank"  class=" btn btn-success  " href="{{ URL::to('Singlenews/'. $Boats1->id) }}"> show </a>
                <a class=" btn btn-warning " href="{{ URL::to('admin/admin_news/'. $Boats1->id.'/edit/' ) }}">Edite</a>

	 			 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>
 
     {{ $Boats->links() }}

 </div>
	
 
 
</div>
@stop