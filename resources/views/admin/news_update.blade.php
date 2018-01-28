@extends ('layouts.dashboard')
@section('page_heading','News  update')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-12">
   						   <?php echo Form::open(array('url' => array('admin/admin_news', $Boats['id'] )    ,'files' => true,'enctype' => 'multipart/form-data'              )) ?>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
{{ method_field('PUT') }}

            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="Title  " name="Title" required="required"  value=" @if ($Boats['Title']) {{ $Boats['Title'] }}  @endif"   >
            </div>
		  
			<div class="form-group">
                <label> photo  </label>
                                <input type="file"    name="photo"    >
             </div>
		  <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"      > @if ($Boats['content']) {{ $Boats['content'] }}  @endif</textarea>
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