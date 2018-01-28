@extends ('layouts.dashboard')
@section('page_heading','News')
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

        {{ Form::open(array('url' => 'admin/admin_news', 'files' => true,'enctype' => 'multipart/form-data'))}}
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group" >
            <label> Title  </label>
            <input class="form-control" placeholder="   Title" name="Title" required="required" value="{{ old('Title') }}"  >
         </div>
         <div class="form-group">
            <label> photo  </label>
            <input type="file"    name="photo"  required="required"  value="{{ old('photo') }}" >
         </div>
         <div class="form-group">
            <label> subscribe  </label>
            <input type="checkbox" name="subscribe" value="subscribe">subscribe <br>
         </div>
         <div class="form-group">
            <label> details </label>
            <textarea class="form-control" rows="3" name="details" required="required"    > {{ old('details') }}</textarea>
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