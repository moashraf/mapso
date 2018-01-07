@extends ('layouts.dashboard')
@section('page_heading','Services  update')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
   						   <?php echo Form::open(array('url' => array('update_Services_save', $Boats['id'] )    ,'files' => true,'enctype' => 'multipart/form-data'              )) ?>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="Title  " name="Title" required="required"  value=" @if ($Boats['titel_Services']) {{ $Boats['titel_Services'] }}  @endif"   >
            </div>
		  
			<div class="form-group">
                <label> photo  </label>
                                <input type="file"    name="photo"   >
             </div>
		  <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"      > @if ($Boats['details']) {{ $Boats['details'] }}  @endif</textarea>
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