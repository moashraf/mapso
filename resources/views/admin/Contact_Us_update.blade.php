@extends ('layouts.dashboard')
@section('page_heading','ContactUs  update')

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


  <?php echo Form::open(array('url' => array('admin/admin_Contact_Us', $ContactUs['id'] )    ,'files' => true,'enctype' => 'multipart/form-data'              )) ?>

{{ method_field('PUT') }}

            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="   Title" name="Title" required="required"  
                value=" @if ($ContactUs['title_c']) {{ $ContactUs['title_c'] }}  @endif   "    >
            </div>
            <div class="form-group" >
                <label> type  </label>
                <input class="form-control" placeholder="   type" name="type" required="required"   
                 value=" @if ($ContactUs['titel_type']) {{ $ContactUs['titel_type'] }}  @endif    "  >
            </div>
            <div class="form-group" >
                <label> address  </label>
                <input class="form-control" placeholder="   address" name="address" required="required"  
                 value=" @if ($ContactUs['addr']) {{ $ContactUs['addr'] }}  @endif    "   >
            </div>
            <div class="form-group" >
                <label> tel  </label>
                <input class="form-control" placeholder="   tel" name="tel" required="required"   
                 value=" @if ($ContactUs['tel']) {{ $ContactUs['tel'] }}  @endif   "  >
            </div>
            <div class="form-group" >
                <label> fax  </label>
                <input class="form-control" placeholder="   fax" name="fax" required="required"  
                 value=" @if ($ContactUs['fax']) {{ $ContactUs['fax'] }}  @endif  "   >
            </div>
            <div class="form-group" >
                <label> mail  </label>
                <input class="form-control" placeholder="   mail" name="mail" required="required"  
                 value=" @if ($ContactUs['mail']) {{ $ContactUs['mail'] }}  @endif   "   >
            </div>
            <div class="form-group" >
                <label> map  </label>
                <input class="form-control" placeholder="   map" name="map" required="required" type="url"  
                 value=" @if ($ContactUs['map_link']) {{ $ContactUs['map_link'] }}  @endif   "   >
            </div>
             			<br>

            <button type="submit" class="btn btn-default">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
			<br>
			<br>
			<br>
        </form>
    </div>
    
</div>
</div>
@stop