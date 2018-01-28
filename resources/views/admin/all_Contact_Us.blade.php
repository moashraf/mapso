@extends('layouts.dashboard')
@section('page_heading',' Contact Us  ')

@section('section')
<div class="col-sm-12">
 
<div class="row">
	 


		  <table class="table table table-hover">
	<thead>
		<tr  >
			<th style=" text-align: center;" >Title</th>
			<th style=" text-align: center;" > type</th>
			<th style=" text-align: center;" >address</th>
            
            <th style=" text-align: center;" >tel</th>
			<th style=" text-align: center;" > fax</th>
			<th style=" text-align: center;" >mail</th>
            			<th style=" text-align: center;" >map</th>

		   <th style=" text-align: center;" >action</th>

		</tr>
	</thead>
	<tbody style=" text-align: center;">
	    
	     		    @foreach($Boats as $Boats1)

		<tr>
			<td>{{ $Boats1->title_c }}</td>
			<td>{{ $Boats1->titel_type }}</td>
             <td>{{ $Boats1->addr }}</td>
			<td>{{ $Boats1->tel }}</td>
            <td>{{ $Boats1->fax }}</td>
			<td>{{ $Boats1->mail }}</td>

			<td>  
                <iframe src=" {{ $Boats1->map_link  }} " width="100" height="130" frameborder="0" style="border:0" allowfullscreen></iframe> 
</td>
  
						<td>
  {{ Form::open(array('url' => 'admin/admin_Contact_Us/' . $Boats1->id, 'class' => 'pull-right')) }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger ')) }}
                                          {{ method_field('DELETE') }}

                {{ Form::close() }}
<br>
    <a class=" btn btn-warning " href="{{ URL::to('admin/admin_Contact_Us/'. $Boats1->id.'/edit/' ) }}">Edite</a>

   </td>

		</tr>
     @endforeach

	
	</tbody>
</table>


     
     {{ $Boats->links() }}

     
 </div>
	
 
 
</div>
@stop