@extends('layouts.dashboard')
@section('page_heading','All   subscribe')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 		  <table class="table table table-hover">
	<thead>
		<tr  >
 			<th style=" text-align: center;" >email</th>	
          
			 <th style=" text-align: center;" >action</th>

		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Boats as $Boats1)

		<tr>
 	<td>   {{ $Boats1->email  }}  </td>
 

            
  						<td>
  {{ Form::open(array('url' => 'admin/admin_subscribe/' . $Boats1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                                            				{{ Form::hidden ('_method', 'Delete' ) }}

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