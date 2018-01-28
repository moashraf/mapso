@extends ('layouts.dashboard')
@section('page_heading','Services')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'admin/admin_Services', 'files' => true,'enctype' => 'multipart/form-data'))}}
 
            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="   Title" name="Title" required="required"   >
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