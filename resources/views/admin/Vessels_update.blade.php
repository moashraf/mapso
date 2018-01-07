@extends ('layouts.dashboard')
@section('page_heading','Vessels update')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
   						   <?php echo Form::open(array('url' => array('update_Vessels_save', $Boats['id'] )    ,'files' => true,'enctype' => 'multipart/form-data'              )) ?>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label>Vessels Name</label>
                <input class="form-control" placeholder="Vessels Name" name="Vessels_Name" required="required"  value=" @if ($Boats['Boatsname']) {{ $Boats['Boatsname'] }}  @endif"   >
            </div>
			<div class="form-group">
                <label>  Hull Material</label>
                <input class="form-control" placeholder="Hull Material"  name="Hull_Material"  required="required"  value=" @if ($Boats['Hull_Material']) {{ $Boats['Hull_Material'] }}  @endif"  >
            </div>
			<div class="form-group">
                <label> Length Overall </label>
                <input class="form-control" placeholder="Length Overall" name="Length_Overall" required="required"   value=" @if ($Boats['Length_Overall']) {{ $Boats['Length_Overall'] }}  @endif"  >
            </div>
			<div class="form-group">
                <label> Beam Overall </label>
                <input class="form-control" placeholder="Beam Overall" name="Beam_Overall"  required="required"   value=" @if ($Boats['Beam_Overall']) {{ $Boats['Beam_Overall'] }}  @endif"  >
            </div>
			<div class="form-group">
                <label> Draught  </label>
                <input class="form-control" placeholder=" Draught"  name="Draught"  required="required"   value=" @if ($Boats['Draught']) {{ $Boats['Draught'] }}  @endif"  >
            </div>
			<div class="form-group">
                <label> Displacement</label>
                <input class="form-control" placeholder=" Displacement" name="Displacement" required="required"   value=" @if ($Boats['Displacement']) {{ $Boats['Displacement'] }}  @endif"   >
            </div>
			<div class="form-group">
                <label>Max Speed</label>
                <input class="form-control" placeholder=" Max Speed"  name="Speed"  required="required"   value=" @if ($Boats['Max_Speed']) {{ $Boats['Max_Speed'] }}  @endif"   >
            </div>
            <div class="form-group">
                <label> Application</label>
                <input class="form-control" placeholder=" Application"  name="Application" required="required"    value=" @if ($Boats['Application']) {{ $Boats['Application'] }}  @endif"   >
            </div>
            
            	<div class="form-group">
                <label> VIDO</label>
                <input class="form-control" placeholder=" VIDO" name="VIDO"  required="required"   value=" @if ($Boats['VIDO']) {{ $Boats['VIDO'] }}  @endif"  >
            </div>
            
            
			<div class="form-group">
                <label> Data Sheet</label>
                                <input type="file"    name="DataSheet"     >

             </div>
		
            <div class="form-group">
                <label>   Photos </label>
                <input type="file"  name="fileToUpload"     >
            </div>
 
			 <div class="form-group">
                <label>   logo </label>
                <input type="file"    name="logo"     >
            </div>
			
			 <div class="form-group">
                <label>   Gallery </label>
                    <input type="file"    name="Gallery[]" multiple    >

             </div>
				
			
            <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"      > @if ($Boats['details_boats']) {{ $Boats['details_boats'] }}  @endif</textarea>
            </div>
           
           
           
            <div class="form-group">
                <label> Model</label>
                <select class="form-control"  name="Model"  required="required"    >
                              @foreach($boats_cat as $Boats1)

                            <option value="{{ $Boats1 }}">  {{ $Boats1 }}    </option>
                          
 						
						     @endforeach
 						
						
                 </select>
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