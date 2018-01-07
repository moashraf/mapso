@extends ('layouts.dashboard')
@section('page_heading','Contact Us')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'add_Contact_Us_save', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="   Title" name="Title" required="required"   >
            </div>
            <div class="form-group" >
                <label> type  </label>
                <input class="form-control" placeholder="   type" name="type" required="required"   >
            </div>
            <div class="form-group" >
                <label> address  </label>
                <input class="form-control" placeholder="   address" name="address" required="required"   >
            </div>
            <div class="form-group" >
                <label> tel  </label>
                <input class="form-control" placeholder="   tel" name="tel" required="required"   >
            </div>
            <div class="form-group" >
                <label> fax  </label>
                <input class="form-control" placeholder="   fax" name="fax" required="required"   >
            </div>
            <div class="form-group" >
                <label> mail  </label>
                <input class="form-control" placeholder="   mail" name="mail" required="required"   >
            </div>
            <div class="form-group" >
                <label> map  </label>
                <input class="form-control" placeholder="   map" name="map" required="required"   >
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