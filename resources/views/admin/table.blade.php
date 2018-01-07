@extends('layouts.dashboard')
@section('page_heading','Tables')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 


		  <table class="table table table-hover">
	<thead>
		<tr  >
			<th style=" text-align: center;" >Name</th>
			<th style=" text-align: center;" >Model</th>
			<th style=" text-align: center;" >Photos</th>
						<th style=" text-align: center;" >action</th>

		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Boats as $Boats1)

		<tr>
			<td>{{ $Boats1->Boatsname }}</td>
			<td>{{ $Boats1->Boatscat }}</td>
			<td>  <img src="{{ URL::to('').'/'.$Boats1->Boatsimg  }}"   height="100" width="150">  </td>
  
						<td>
  {{ Form::open(array('url' => 'destroy/' . $Boats1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete    ', array('class' => 'btn btn-danger ')) }}
                {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a target="_blank"  class=" btn btn-success  " href="{{ URL::to('SingleBoat/'. $Boats1->id) }}"> show </a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class=" btn btn-warning    " href="{{ URL::to('update_Vessels/'. $Boats1->id ) }}">Edite</a>

 

	 			 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Boats->links() }}

     
 </div>
	
 
 
</div>
@stop