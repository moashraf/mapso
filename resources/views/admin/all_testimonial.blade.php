@extends('layouts.dashboard')
@section('page_heading','All testimonial ')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 


		  <table class="table table table-hover">
	<thead>
		<tr  >
 			<th style=" text-align: center;" >tag</th>	
            <th style=" text-align: center;" >position</th>	
            <th style=" text-align: center;" >company</th>	
            <th style=" text-align: center;" >text</th>
            <th style=" text-align: center;" >img </th>
			 <th style=" text-align: center;" >action</th>

		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Boats as $Boats1)

		<tr>
 	<td>   {{ $Boats1->testimonial_tag  }}  </td>
 	<td>   {{ $Boats1->position  }}  </td>
 	<td>   {{ $Boats1->company  }}  </td>
 <td>   {{ $Boats1->testimonial_text  }}  </td>
			<td>  <img src="{{ URL::to('').'/'.$Boats1->testimonialimg  }}"   height="100" width="150">  </td>

 
            
  						<td>
  {{ Form::open(array('url' => 'destroy_testimonial/' . $Boats1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                {{ Form::close() }}
         <a class=" btn btn-warning    " href="{{ URL::to('update_testimonial/'. $Boats1->id ) }}">Edite</a>
      
                            
 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Boats->links() }}

     
 </div>  
	
 
 
</div>
@stop