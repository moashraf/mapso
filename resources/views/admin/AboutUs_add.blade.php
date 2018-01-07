@extends ('layouts.dashboard')
@section('page_heading','   About Us')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'add_About_Us_save', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="   Title" name="Title" required="required"   >
            </div>
            <div class="form-group" >
                <label> percentage  </label>
                <input  type="number" class="form-control" placeholder="   percentage" name="percentage" required="required"   >
            </div>
            <div class="form-group" >
                <label> number  </label>
                <input type="number" class="form-control" placeholder="   number" name="number" required="required"   >
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