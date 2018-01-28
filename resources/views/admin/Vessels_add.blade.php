@extends ('layouts.dashboard')
@section('page_heading','Vessels')
@section('section')
<div class="col-sm-12">

<div class="row">
    <div class="col-lg-12">
       {{ Form::open(array('url' => 'admin/admin_Vessels', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label>Vessels Name</label>
                <input class="form-control" placeholder="Vessels Name" name="Vessels_Name" required="required"   >
            </div>
			<div class="form-group">
                <label>  Hull Material</label>
                <input class="form-control" placeholder="Hull Material"  name="Hull_Material"  required="required" >
            </div>
			<div class="form-group">
                <label> Length Overall </label>
                <input class="form-control" placeholder="Length Overall" name="Length_Overall" required="required"  >
            </div>
			<div class="form-group">
                <label> Beam Overall </label>
                <input class="form-control" placeholder="Beam Overall" name="Beam_Overall"  required="required"  >
            </div>
			<div class="form-group">
                <label> Draught  </label>
                <input class="form-control" placeholder=" Draught"  name="Draught"  required="required"  >
            </div>
			<div class="form-group">
                <label> Displacement</label>
                <input class="form-control" placeholder=" Displacement" name="Displacement" required="required"  >
            </div>
			<div class="form-group">
                <label>Max Speed</label>
                <input class="form-control" placeholder=" Max Speed"  name="Speed"  required="required"  >
            </div>
            <div class="form-group">

                <li class="dropdown">                                  <label> Application  </label>

       <div class="form-group SingleBoat_filters ">
                        <select name="Application" class="form-control" name="Application" required="required"  >
                            <option value="Application">   Application</option>
                            <option value="Fishing_Vessels"> Fishing Vessels  </option>
                              <option value="Barge_Boat">   Barge Boat</option>
                            <option value="Conventional_Tug">   Conventional Tug</option>
                            <option value="Ferry">   Ferry</option>
                            <option value="Fire_Boat">   Fire Boat</option>
                            <option value="Harbour_Shuttle">   Harbour Shuttle</option>
                            <option value="Multi_function">   Multi function</option>
                            <option value="Oil_Spill_Recovery">   Oil Spill Recovery</option>
                            <option value="Patrol_Boat">   Patrol Boat</option>
                            <option value="Pilot_Boat">   Pilot Boat</option>
                            <option value="Pleasure_Charter">   Pleasure/Charter</option>
                            <option value="RIB">   (RIB) </option>
                            <option value="Service">   Service/Utility</option>

                            <option value="Voith_Water_Tractor">   Tug </option>
                            <option value="Waste_Collector_Boat">   Waste Collector </option>
                            <option value="Watercraft">   Watercraft</option>


                        </select>
                    </div>
      </li>
                
                
                
             </div>
            
            	<div class="form-group">
                <label> vidoe</label>
                <input   type="url" class="form-control" placeholder=" vidoe" name="VIDO"  required="required"   >
            </div>
            
            
			<div class="form-group">
                <label> Data Sheet</label>
                                <input type="file"    name="DataSheet"  required="required"   >

             </div>
		
            <div class="form-group">
                <label>   Photos </label>
                <input type="file"  name="fileToUpload" required="required"    >
            </div>
 
			 <div class="form-group">
                <label>   logo </label>
                <input type="file"    name="logo"  required="required"   >
            </div>
			
			 <div class="form-group">
                <label>   Gallery </label>
                    <input type="file"  required="required" name="Gallery[]" multiple    >

             </div>
				
			
            <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"    ></textarea>
            </div>
           
           
           
            <div class="form-group">
                <label> Model</label>
                <select class="form-control"  name="Model"  required="required"    >
				
	     		    @foreach($boats_cat as $Boats1)

                            <option value="{{ $Boats1->id }}">  {{ $Boats1->boats_cat_text }}    </option>
                          
 						
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