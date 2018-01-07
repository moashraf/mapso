@extends ('layouts.dashboard')
@section('page_heading','testimonial')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'add_testimonial_save', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label> tag  </label>
                <input class="form-control" placeholder="   tag" name="tag" required="required"   >
            </div>
		
        
            <div class="form-group" >
                <label> position  </label>
                <input class="form-control" placeholder="   position" name="position" required="required"   >
            </div>
		
        
            <div class="form-group" >
                <label> company  </label>
                <input class="form-control" placeholder="   company" name="company" required="required"   >
            </div>
		
        
        	
			<div class="form-group">
                <label> photo  </label>
                                <input type="file"    name="photo"  required="required"   >

             </div>
        
        
            <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"    ></textarea>
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