@extends ('layouts.dashboard')
@section('page_heading','subscribe  ')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
   {{ Form::open(array('url' => 'admin/admin_subscribe',  'enctype' => 'multipart/form-data'))}}
 
            <div class="form-group" >
                <label> email  </label>
                <input class="form-control" placeholder="email" name="email" required="required" type="email"  >
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