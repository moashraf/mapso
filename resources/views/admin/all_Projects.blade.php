@extends('layouts.dashboard')
@section('page_heading','Projects')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 


		  <table class="table table table-hover">
	<thead>
		<tr  >

			<th style=" text-align: center;"  >Year</th>
        <th style=" text-align: center;"  >Boat Type </th>
        <th style=" text-align: center;"  >Yard Name</th>
		 <th style=" text-align: center;"  >Boat Class/Series</th>
        <th style=" text-align: center;"  > Boat Name	   </th>
        <th style=" text-align: center;"  >  Application  </th>



		</tr>
	</thead>
	<tbody style=" text-align: center;"
	    
	     		    @foreach($Projects as $Projects1)

		<tr>
		   <td> {{$Projects1->Year}}   </td>
        <td> {{$Projects1->Boat_Type}}   </td>
        <td> {{$Projects1->Yard_Name}}    </td>
        <td> {{$Projects1->Series}}  </td>
        <td> {{$Projects1->Boat_Name}}  </td>
        <td> {{$Projects1->Application}}  </td>



						<td>
 				    {{ Form::open(array('url' => 'admin/admin_Projects/destroy/'.$Projects1->id , 'class' => 'pull-right')) }}
 
                    {{ Form::submit('Delete ' , array('class' => 'btn btn-danger ')) }}

    				{{ Form::hidden ('_method', 'Delete' ) }}
 
                    {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a target="_blank"  class=" btn btn-success  " href="{{ URL::to('SingleBoat/'. $Projects1->id) }}"> show </a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class=" btn btn-warning    " href="{{ URL::to('update_Vessels/'. $Projects1->id ) }}">Edite</a>

    	 			 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Projects->links() }}

     
 </div>
	
 
 
</div>
@stop