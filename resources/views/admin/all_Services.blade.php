@extends('layouts.dashboard')
@section('page_heading','All Services ')

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
			<td>{{ $Boats1->titel_Services }}</td>
			<td>{{ $Boats1->details }}</td>
			<td>  <img src="{{ URL::to('').'/'.$Boats1->img  }}"   height="100" width="150">  </td>
  
						<td>
  {{ Form::open(array('url' => 'destroy_Services/' . $Boats1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                {{ Form::close() }}
 
                <a class=" btn btn-warning    " href="{{ URL::to('update_Services/'. $Boats1->id ) }}">Edite</a>

 

	 			 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Boats->links() }}

     
 </div>
	
 
 
</div>
@stop