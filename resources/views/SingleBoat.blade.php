@extends('master')
@section('content')

                <div id="page-content" class="header-static  ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small ">

            <ul class="slides">

                        @foreach($SingleBoat as $SingleBoat1)

                                <li style="background-image:url(    {{ URL::to('/').'/'.$SingleBoat1->Boatsimg  }}     )">
                  <div class="container text" style="    top: 85%; "> 
  <h5 class="   SingleBoat_h2">  <img src="{{ URL::to('/').'/'.$SingleBoat1->Boats_logo  }} " style=" width: 80%;">
			   
      
 </h5>
                    </div>
                 </li>  @endforeach
                               
            </ul>

        
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
	<div class="full-width " style="    background: #394a58;"> <nav class="navbar navbar-default backgroundnoclor footermenue" style="       padding-top: 12px; width: 1200px;">
  <div class="container-fluid">
        <ul class="nav navbar-nav  " style="    font-size: 12px;">
            
            
            
    
            
    @foreach($SingleBoat as $SingleBoat12)
  <li><a class=" " href=" "> {{  $SingleBoat12->get_full_cat_data()->first()->boats_cat_text  }}        </a></li>
    @endforeach
            
            
      
    </ul>
  </div>
</nav>	</div>

<section id="team" class="wpb_row vg_fixed row   "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style="     padding: 7px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null  text-center">
  <p class="  Propulsion_p flex-animation">    {{$SingleBoat1->details_boats}}  </p>
   </div>
<div class="vc_row wpb_row vc_inner fullpage-wrap small"  >

 </div></div></div></div></div></section>
 
 
 
 
 
 
 
 <nav class="navbar navbar-default" role="navigation" style="    margin-bottom: 0px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only"> Our Vessels filters  </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Our Vessels Filters  </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
             <form  action=" {{ URL::to('/filters').'/'.$SingleBoat1->id  }}  " class="filters_form"   role="search">

      <li class="dropdown">
       <div class="form-group SingleBoat_filters ">
                        <select name="Application" class="form-control">
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
	  <li class="dropdown">
       <div class="form-group SingleBoat_filters ">
                        <select name="Series" class="form-control">
                             @foreach($SingleBoat as $Boats1)

                            <option value=" ">   {{  $SingleBoat12->get_full_cat_data()->first()->boats_cat_text  }}    </option>
                          
 						
						     @endforeach
                        </select>
                    </div>
      </li>
	  <li class="dropdown">
        <div class="form-group SingleBoat_filters ">
                        <select name="Market" class="form-control">
                            <option value="DESC">   Market</option>
                            <option value="ASC">Market</option>
                        </select>
                    </div>
      </li>
    
	
	  <li class="dropdown">
        <div class="form-group SingleBoat_filters ">
                        <select name="Brand" class="form-control">
                                                       <option value="Brand">  Brand</option>
                                                       <option value="Brand">  Brand</option>

                        </select>
                    </div>
      </li>
	<button type="submit" id="btn-filter-pending" class="btn btn-default SingleBoat_filters ">Update</button> 
    </form>	</ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search"  action="{{ URL::to('/search')  }} " >
        <div class="input-group">
            <input  id="tags2" type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search icon ion-ios-search " style="    font-size: 20px;
    font-weight: bold;
    height: auto;
    color: #000000;"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
       <div class="form-group SingleBoat_filters ">
                        <select name="popularity" class="form-control">
                            <option value="DESC">Date </option>
                            <option value="ASC">Date </option>
                        </select>
                    </div>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
 
 
 
 
 
 
 <section id="team" class="wpb_row vg_fixed row   " style="    background:  #e1e4e5;"  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >	
	    
	    <?php  if(  $cat->count()=="" ){ echo"  <h3 style='text-align: center; padding: 50px; ' >  $nodata<h3>	 "; }   ?>
	    
	  
    @foreach($cat as $SingleBoat12)

  <section id="news" class="page">
                                <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: #e1e4e5;">
                                            <div class="col-md-6 padding-leftright-null" style="    width: 37%;">
  <img  class="image" style="    height: 229px; border-radius: 23px; background-image:url()" src="{{URL::to('/')}}/{{$SingleBoat12->Boatsimg}} " alt="">
 <img style="           width: 54%;   padding-top: 20px;
    margin: auto;" src="{{ URL::to('/').'/'.$SingleBoat1->Boats_logo  }}" alt="">

 
                                            </div>
                                            <div class="col-md-6 padding-leftright-null"  style="    width: 60%;" >
                                                <div class="content"  style="padding-top: 6px; ">
      <a href="{{ URL::to('/SingleBoat').'/'.$SingleBoat12->id}}"> 


  <p >  
   <b>    Name:</b>    {{$SingleBoat12->Boatsname}}<br>
  <b>  
  
Boat Series / Model:</b>    {{$SingleBoat12->Boatscat}}  <br>
 <b> Hull Material:</b>  {{$SingleBoat12->Hull_Material}}  <br>
 <b> Length Overall: </b> {{$SingleBoat12->Length_Overall}}  <br>
 <b> Beam Overall:</b>  {{$SingleBoat12->Beam_Overall	}}  <br>
 <b> Draught: </b> {{$SingleBoat12->Draught}} <br>
 <b> Displacement:</b>  {{$SingleBoat12->Displacement}} <br>
 <b> Max. Speed: </b> {{$SingleBoat12->Max_Speed}} <br> 
 <b> Application: </b> {{$SingleBoat12->Application}} <br> 
 </p>
 </a>
 
 <div class="row   margin-leftright-null">
                                     <div class="col-xs-8 col-sm-4  padding-sm">
                                        <a href="#" class="btn-alt small active margin-null" data-toggle="modal" data-target="#myModal{{$SingleBoat12->id}}">  Gallery </a>
                                       
                                    </div>
									<div class="col-xs-8 col-sm-4  padding-sm">
                                        <a  target="_blank"  href="{{ URL::to('/').'/'.$SingleBoat12->DataSheet}}  " class="btn-alt small margin-null DataSheet " > Data Sheet</a>
                                    </div>

									   
                                    <div class="col-xs-8 col-sm-1  padding-sm">
    <a   target="_blank" href="{{$SingleBoat12->VIDO}} " class="  SingleBoat_YPUT  active margin-null"> <i class="fa fa-youtube" aria-hidden="true"></i> </a>
                                    </div>
                                   
                                </div>

                                                     
                                                </div>
                                            </div>
                                         </article>     

                                    </div>
                                                                   
                                                                </div>
                            </section>     <div class ="full-width "style="     background: #ffffff;
    height: 2px;">  </div>  

 

	
							@endforeach  {{ $cat->links() }}
 
 
 	




 </div></div></div></div></div></section>
 
  

    </div>
    </div>
 

 @endsection
     @foreach($cat as $SingleBoat12)

 
 <div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal{{$SingleBoat12->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">  {{$SingleBoat12->Boatsname}}  </h4>
        </div>
        <div class="modal-body">
         	<?php     $data = DB::table('singleboat_gallery')->where("boats_id_Gallery", "$SingleBoat12->id")->get(); 
		if ($data->count())  
 {  

			
			
			?>  <br>
<div class="  .col-xs-12 .col-sm-6 .col-lg-8 	">
   <div id="myCarousel{{$SingleBoat12->id}}" class="carousel slide" data-ride="carousel">
 
    <div class="carousel-inner">

     @foreach($data as $gallery1)
	
	
    <div class="item   ">
        <img src="{{ URL::to('/').'/'.$gallery1->img_url  }}  "   style="width:100%;">
        <div class="carousel-caption galary_text">
          <h3 class="white  ">{{$gallery1->img_tit}} 	 </h3>
          <p> </p>
        </div>
      </div>
	   
@endforeach
    
	
	
	
      <div class="item  active">
        <img src="{{ URL::to('/').'/'.$gallery1->img_url  }}  "   style="width:100%;">
        <div class="carousel-caption galary_text">
          <h3 class="white  ">{{$gallery1->img_tit}} 	 </h3>
          <p> </p>
        </div>
      </div> 
    
       
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel{{$SingleBoat12->id}}" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left icon ion-ios-arrow-thin-left "></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel{{$SingleBoat12->id}}" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right icon ion-ios-arrow-thin-right "></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 <?php }else{ echo"There are no pictures"; } 

			
			
			?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
@endforeach
   