@extends('layouts.dashboard')
@section('page_heading','All Services ')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 


		  <table class="table table table-hover">
	<thead>
		<tr>
			<th style=" text-align: center;" >Title</th>
			<th style=" text-align: center;" >content</th>
			<th style=" text-align: center;" >Photos</th>
		    <th style=" text-align: center;" >action</th>
		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Services as $Services1)

		<tr>
			<td>{{ $Services1->titel_Services }}</td>
			<td>{{ $Services1->details }}</td>
			<td>  <img src="{{ URL::to('').'/'.$Services1->img  }}"   height="100" width="150">  </td>
  
						<td>
  {{ Form::open(array('url' => 'admin/admin_Services/' . $Services1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                                            				{{ Form::hidden ('_method', 'Delete' ) }}

                {{ Form::close() }}
 
                <a class=" btn btn-warning    " href="{{ URL::to('admin/admin_Services/'.$Services1->id.'/edit' ) }}">Edite</a>

 

	 			 </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Services->links() }}

     
 </div>
	
 
 
</div>
@stop