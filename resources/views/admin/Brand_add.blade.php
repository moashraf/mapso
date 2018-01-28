@extends ('layouts.dashboard')
@section('page_heading','Brand')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'admin/admin_Brand', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

		    <div class="form-group">
                <label> photo   (165*175)</label>
                                <input type="file"    name="photo"  required="required"   >

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