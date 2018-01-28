@extends ('layouts.dashboard')
@section('page_heading','Contact Us')

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



                          {{ Form::open(array('url' => 'admin/admin_Contact_Us', 'files' => true,'enctype' => 'multipart/form-data'))}}
 
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
                <input class="form-control" placeholder="   map" name="map" required="required" type="url"   >
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