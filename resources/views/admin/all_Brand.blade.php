@extends('layouts.dashboard')
@section('page_heading','All Brand')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 


		  <table class="table table table-hover">
	<thead>
		<tr  >
 			<th style=" text-align: center;" >Photos</th>
						<th style=" text-align: center;" >action</th>

		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Boats as $Boats1)

		<tr>
 			<td>  <img src="{{ URL::to('').'/'.$Boats1->imgurl  }}"   height="100" width="150">  </td>
  						<td>
  {{ Form::open(array('url' => 'destroy_Brand/' . $Boats1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                {{ Form::close() }}
 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Boats->links() }}

     
 </div>
	
 
 
</div>
@stop