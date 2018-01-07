@extends ('layouts.dashboard')
@section('page_heading','subscribe  ')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'add_subscribe_save', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

            <div class="form-group" >
                <label> email  </label>
                <input class="form-control" placeholder="   email" name="email" required="required"   >
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