@extends ('layouts.dashboard')
@section('page_heading','News')

@section('section')
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
                          {{ Form::open(array('url' => 'add_news_save', 'files' => true,'enctype' => 'multipart/form-data'))}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" >
                <label> Title  </label>
                <input class="form-control" placeholder="   Title" name="Title" required="required"   >
            </div>
			 
            <div class="form-group">
                 
                <li class="dropdown">
       <div class="form-group SingleBoat_filters ">
                        <select name="cat" class="form-control"  required="required"  >
                            <option value="cat">   cat</option>
                            <option value="Vessels">   Vessels  </option>
                              <option value="news">   our news </option>
                                                  </select>
                    </div>
      </li>
                
                
                
             </div>
            
             
            
			<div class="form-group">
                <label> photo  </label>
                                <input type="file"    name="photo"  required="required"   >

             </div>
		    
			<div class="form-group">
                <label> subscribe  </label>
            <input type="checkbox" name="subscribe" value="subscribe">subscribe <br>

             </div>
		
           
			
            <div class="form-group">
                <label> details </label>
                <textarea class="form-control" rows="3" name="details" required="required"    ></textarea>
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