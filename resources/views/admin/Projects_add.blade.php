@extends ('layouts.dashboard')
@section('page_heading','Projects')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
              {{ Form::open(array('url' => 'admin_Projects', 'files' => true,'enctype' => 'multipart/form-data'))}}
 

            <div class="form-group" >
                <label> Year  </label>
                {{ Form::text('Year', date('Y'), ['class' => 'form-control']) }}
             </div>
			<div class="form-group">
                <label>   Boat Type    </label>

                <input class="form-control" placeholder="  Boat Type"  name="Boat_Type"  required="required" >
            </div>
			<div class="form-group">
                <label>  Yard Name      </label>
                <input class="form-control" placeholder=" Yard Name " name="Yard_Name" required="required"  >
            </div>
			<div class="form-group">
                <label>  Boat Class/Series      </label>
                <input class="form-control" placeholder="Boat Class/Series " name="Series"  required="required"  >
            </div>
			<div class="form-group">
                <label>  Boat Name     </label>
                <input class="form-control" placeholder="   Boat Name  "  name="Boat_Name"  required="required"  >
            </div>
			<div class="form-group">
                <label> Application
            </label>
                <input class="form-control" placeholder=" Application " name="Application" required="required"  >
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