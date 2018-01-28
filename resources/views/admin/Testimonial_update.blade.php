@extends ('layouts.dashboard')
@section('page_heading','   update')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   			   <?php echo Form::open(array('url' => array('admin/admin_testimonial', $Boats['id'] )    ,'files' => true,'enctype' => 'multipart/form-data'              )) ?>

 
        {{ method_field('PUT') }}

        
            <div class="form-group" >
                <label> tag  </label>
                <input class="form-control" placeholder="   tag" name="tag" required="required"   value=" @if ($Boats['testimonial_tag']) {{ $Boats['testimonial_tag'] }}  @endif"  >
            </div>
		
        
            <div class="form-group" >
                <label> position  </label>
                <input class="form-control" placeholder="   position" name="position" required="required" value=" @if ($Boats['position']) {{ $Boats['position'] }}  @endif"   >
            </div>
		
        
            <div class="form-group" >
                <label> company  </label>
                <input class="form-control" placeholder="   company" name="company" required="required"  value=" @if ($Boats['company']) {{ $Boats['company'] }}  @endif"  >
            </div>
		
        
        	 	<div class="form-group">
                <label> photo  </label>
                                <input type="file"    name="photo"     >

             </div>
        
        
        
		  <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"      > @if ($Boats['testimonial_text']) {{ $Boats['testimonial_text'] }}  @endif</textarea>
            </div>
        
             			<br>

            <button type="submit" class="btn btn-default">Submit  </button>
            <button type="reset" class="btn btn-default">Reset  </button>
			<br>
			<br>
			<br>
        </form>
    </div>
    
</div>
</div>
@stop