@extends('master')
@section('content')
<div id="page-content" class="header-static  ">
   <!--  Slider  -->
   <div id="flexslider-nav" class="fullpage-wrap small ">
      <ul class="slides">
         
         <li style="background-image:url(    {{ URL::to('/').'/'.$SingleBoat->id  }}     )">
            <div class="container text" style="    top: 85%; ">
               <h5 class="   SingleBoat_h2">  <img src="{{ URL::to('/').'/'.$SingleBoat->Boats_logo  }} " style=" width: 80%;">
               </h5>
            </div>
         </li>
      
      </ul>
   </div>
   <!--  END Slider  -->
   <div id="home-wrap" class="content-section fullpage-wrap">
            <div class="full-width " style="    background: #394a58;">
         <nav class="navbar navbar-default backgroundnoclor footermenue" style="       padding-top: 12px; width: 1200px;">
            <div class="container-fluid">
               <ul class="nav navbar-nav  " style="    font-size: 12px;">
                   
         @foreach($all_cat as $all_cat_val)

                   <li>
                     <a style="<?php if($SingleBoat->get_full_cat_data->id==$all_cat_val->id) {echo "    font-size: 17px;
    color: white !important;";}  ?> " 
                        href="{{ URL::to('/SingleBoat').'/'. $SingleBoat->id.'/'. $all_cat_val->id }} ">
                    {{   $all_cat_val->boats_cat_text }}   
                     </a>
                  </li>
                           @endforeach

                </ul>
            </div>
         </nav>
      </div>
      <section id="team" class="wpb_row vg_fixed row "  >
         <div class="container">
            <div class="text wpb_column vc_column_container vc_col-sm-12" style="     padding: 7px;">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="col-md-6 padding-leftright-null   ">
                        <p class="  Propulsion_p flex-animation">    {{$SingleBoat->details_boats}}  </p>
                          <div class="row   margin-leftright-null">
                                             <div class="col-xs-8 col-sm-4  padding-sm">
                                                <a href="#" class="btn-alt small active margin-null" data-toggle="modal" data-target="#myModal{{$SingleBoat->id}}">  Gallery </a>
                                             </div>
                                             <div class="col-xs-8 col-sm-4  padding-sm">
                                                <a  target="_blank"  href="{{ URL::to('/').'/'.$SingleBoat->DataSheet}}  " class="btn-alt small margin-null DataSheet " > Data Sheet</a>
                                             </div>
                                             <div class="col-xs-8 col-sm-1  padding-sm">
                                                <a   target="_blank" href="{{$SingleBoat->VIDO}} " class="  SingleBoat_YPUT  active margin-null"> <i class="fa fa-youtube" aria-hidden="true"></i> </a>
                                             </div>
                                          </div>

                     </div>
                     <div class="col-md-6 padding-leftright-null  ">
                                       <div class="content"  style="padding-top: 6px; ">
                                          <a href="{{ URL::to('/SingleBoat').'/'.$SingleBoat->id}}">
                                             <p >  
                                                <b>    Name:</b>    {{$SingleBoat->Boatsname}}<br>
                                                <b>  
                                                Boat Series / Model:</b>    {{  $SingleBoat->get_full_cat_data->boats_cat_text  }}  <br>
                                                <b> Hull Material:</b>  {{$SingleBoat->Hull_Material}}  <br>
                                                <b> Length Overall: </b> {{$SingleBoat->Length_Overall}}  <br>
                                                <b> Beam Overall:</b>  {{$SingleBoat->Beam_Overall  }}  <br>
                                                <b> Draught: </b> {{$SingleBoat->Draught}} <br>
                                                <b> Displacement:</b>  {{$SingleBoat->Displacement}} <br>
                                                <b> Max. Speed: </b> {{$SingleBoat->Max_Speed}} <br> 
                                                <b> Application: </b> {{$SingleBoat->Application}} <br> 
                                             </p>
                                          </a>
                                        
                                       </div>
                                    </div>
                           
                     <div class="vc_row wpb_row vc_inner fullpage-wrap small"  >
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
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
               <form  action=" {{ URL::to('/filters').'/'.$SingleBoat->id  }}  " class="filters_form"   role="search">
                  <li class="dropdown">
                     <div class="form-group SingleBoat_filters ">
                        <select name="Application" class="form-control">
                           <option value="Barge_Boat">   Barge_Boat</option>
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
                            <option value=" ">  fgfgf   </option>
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
               </form>
            </ul>
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
                    </div>
         <!-- /.navbar-collapse -->
      </nav>
      <section id="team" class="wpb_row vg_fixed row   " style="    background:  #e1e4e5;"  >
         <div class="container">
            <div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="vc_row wpb_row vc_inner   small" >
                        <?php  if(  $cat->count()=="" ){ echo"  <h3 style='text-align: center; padding: 50px; ' >  $nodata<h3>   "; }   ?>
                        @foreach($cat as $SingleBoat2)
                        <section id="news" class="page">
                           <div class="news-items equal one-columns" style="position: relative; height: 722px;">
                              <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                 <article style="        box-shadow: none;  background: #e1e4e5;">
                                    <div class="col-md-6 padding-leftright-null" style="    width: 37%;">
                                       <img  class="image" style="    height: 229px; border-radius: 23px; background-image:url()" src="{{URL::to('/')}}/{{$SingleBoat2->Boatsimg }} " alt="">
                                       <img style="           width: 54%;   padding-top: 20px;
                                          margin: auto;" src="{{ URL::to('/').'/'.$SingleBoat->Boats_logo  }}" alt="">
                                    </div>
                                    <div class="col-md-6 padding-leftright-null"  style="    width: 60%;" >
                                       <div class="content"  style="padding-top: 6px; ">
                                          <a href="{{ URL::to('/SingleBoat').'/'.$SingleBoat2->id}}">
                                             <p >  
                                                <b>    Name:</b>    {{$SingleBoat2->Boatsname}}<br>
                                                <b>  
                                                Boat Series / Model:</b>    {{  $SingleBoat2->get_full_cat_data->boats_cat_text  }}  <br>
                                                <b> Hull Material:</b>  {{$SingleBoat2->Hull_Material}}  <br>
                                                <b> Length Overall: </b> {{$SingleBoat2->Length_Overall}}  <br>
                                                <b> Beam Overall:</b>  {{$SingleBoat2->Beam_Overall  }}  <br>
                                                <b> Draught: </b> {{$SingleBoat2->Draught}} <br>
                                                <b> Displacement:</b>  {{$SingleBoat2->Displacement}} <br>
                                                <b> Max. Speed: </b> {{$SingleBoat2->Max_Speed}} <br> 
                                                <b> Application: </b> {{$SingleBoat2->Application}} <br> 
                                             </p>
                                          </a>
                                          <div class="row   margin-leftright-null">
                                             <div class="col-xs-8 col-sm-4  padding-sm">
                                                <a href="#" class="btn-alt small active margin-null" data-toggle="modal" data-target="#myModal{{$SingleBoat2->id}}">  Gallery </a>
                                             </div>
                                             <div class="col-xs-8 col-sm-4  padding-sm">
                                                <a  target="_blank"  href="{{ URL::to('/').'/'.$SingleBoat2->DataSheet}}  " class="btn-alt small margin-null DataSheet " > Data Sheet</a>
                                             </div>
                                             <div class="col-xs-8 col-sm-1  padding-sm">
                                                <a   target="_blank" href="{{$SingleBoat2->VIDO}} " class="  SingleBoat_YPUT  active margin-null"> <i class="fa fa-youtube" aria-hidden="true"></i> </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </article>
                              </div>
                           </div>
                        </section>
                        <div class ="full-width "style="     background: #ffffff;
                           height: 2px;">  </div>
                        @endforeach  {{ $cat->links() }}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
@foreach($cat as $SingleBoat2)
<div class="container">
   <!-- Modal --> 
   <div class="modal fade" id="myModal{{$SingleBoat2->id}}" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">  {{$SingleBoat2->Boatsname}}  </h4>
            </div>
            <div class="modal-body">
               <?php     $data = DB::table('singleboat_gallery')->where("boats_id_Gallery", "$SingleBoat2->id")->get(); 
                  if ($data->count())  
                  {  ?>  <br>
               <div class="  .col-xs-12 .col-sm-6 .col-lg-8   ">
                  <div id="myCarousel{{$SingleBoat2->id}}" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        @foreach($data as $gallery1)
                        <div class="item   ">
                           <img src="{{ URL::to('/').'/'.$gallery1->img_url  }}  "   style="width:100%;">
                           <div class="carousel-caption galary_text">
                              <h3 class="white  ">{{$gallery1->img_tit}}   </h3>
                              <p> </p>
                           </div>
                        </div>
                        @endforeach
                        <div class="item  active">
                           <img src="{{ URL::to('/').'/'.$gallery1->img_url  }}  "   style="width:100%;">
                           <div class="carousel-caption galary_text">
                              <h3 class="white  ">{{$gallery1->img_tit}}   </h3>
                              <p> </p>
                           </div>
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="left carousel-control" href="#myCarousel{{$SingleBoat2->id}}" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left icon ion-ios-arrow-thin-left "></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#myCarousel{{$SingleBoat2->id}}" data-slide="next">
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



         <div class="container"> 
   <!-- Modal -->
   <div class="modal fade" id="myModal{{$SingleBoat->id}}" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">  {{$SingleBoat->Boatsname}}  </h4>
            </div>
            <div class="modal-body">
               <?php     $data = DB::table('singleboat_gallery')->where("boats_id_Gallery", "$SingleBoat->id")->get(); 
                  if ($data->count())  
                  {  ?>  <br>
               <div class="  .col-xs-12 .col-sm-6 .col-lg-8   ">
                  <div id="myCarousel{{$SingleBoat->id}}" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        @foreach($data as $gallery1)
                        <div class="item   ">
                           <img src="{{ URL::to('/').'/'.$gallery1->img_url  }}  "   style="width:100%;">
                           <div class="carousel-caption galary_text">
                              <h3 class="white  ">{{$gallery1->img_tit}}   </h3>
                              <p> </p>
                           </div>
                        </div>
                        @endforeach
                        <div class="item  active">
                           <img src="{{ URL::to('/').'/'.$gallery1->img_url  }}  "   style="width:100%;">
                           <div class="carousel-caption galary_text">
                              <h3 class="white  ">{{$gallery1->img_tit}}   </h3>
                              <p> </p>
                           </div>
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="left carousel-control" href="#myCarousel{{$SingleBoat->id}}" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left icon ion-ios-arrow-thin-left "></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#myCarousel{{$SingleBoat->id}}" data-slide="next">
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





@endsection
