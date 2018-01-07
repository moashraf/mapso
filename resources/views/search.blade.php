@extends('master')
@section('content')

                <div id="page-content" class="header-static  ">
		

        <div id="home-wrap" class="content-section fullpage-wrap">							
 
  
 
 
 <section id="team" class="wpb_row vg_fixed row   " style="    background:  #e1e4e5;"  ><div class="container">
     
     
      <div class="col-md-12 padding-leftright-null  text-center" style="    margin-top: 219px;">

        <h3 class="margin-bottom-null   line center"> Search   </h3>
                         <p class="  Propulsion_p flex-animation"> 
                             <b>  WE FOUND </b> 
"  	    
    
    <?php 
$result = count($cat)+count($News);  echo $result;  ?>  "
                              <b> 
Results  Matching the keyword </b> 
"{{$_GET["q"]}}"
          </p>
  
   <div class ="full-width "style="     background: #ffffff;
    height: 2px;">  </div>  

    </div>
     
      <div class ="full-width "style="     background: #ffffff;
    height: 2px;">  </div>  

<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >	

    @foreach($cat as $SingleBoat12)

  <section id="news" class="page">
                                <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: #e1e4e5;">
                                            <div class="col-md-6 padding-leftright-null" style="    width: 37%;">
  <img  class="image" style="    height: 229px; border-radius: 23px; background-image:url()" src="{{URL::to('/')}}/{{$SingleBoat12->Boatsimg}} " alt="">
 <img style="           width: 54%;   padding-top: 20px;
    margin: auto;" src="{{ URL::to('/').'/'.$SingleBoat12->Boats_logo  }}" alt="">

 
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

 

	
							@endforeach  

     {{--**********************************************************news ************************************************************************* --}}


    
     @foreach($News as $SingleBoat12)

  <section id="news" class="page">
                                <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: #e1e4e5;">
                                            <div class="col-md-6 padding-leftright-null" style="    width: 37%;">
  <img  class="image" style="    height: 229px; border-radius: 23px; background-image:url()" src="{{URL::to('/')}}/{{$SingleBoat12->img}} " alt="">
 

 
                                            </div>
                                            <div class="col-md-6 padding-leftright-null"  style="    width: 60%;" >
                                                <div class="content"  style="padding-top: 6px; ">
      <a href="{{ URL::to('/Singlenews').'/'.$SingleBoat12->id}}"> 


  <p >  
 
{{$SingleBoat12->content}}
</p>
 </a>
 
 <div class="row   margin-leftright-null">
                                     <div class="col-xs-8 col-sm-4  padding-sm">
                                        <a href="{{ URL::to('/Singlenews').'/'.$SingleBoat12->id}}" class="btn-alt small active margin-null"   >   show  </a>
                                       
                                    </div>
								                                 
                                </div>

                                                     
                                                </div>
                                            </div>
                                         </article>     

                                    </div>
                                                                   
                                                                </div>
                            </section>     <div class ="full-width "style="     background: #ffffff;
    height: 2px;">  </div>  

 

	
							@endforeach  
    
    
    
  </div></div></div></div></div></section>
 
  

    </div>
    </div>
 

 @endsection


     {{--**********************************************************news ************************************************************************* --}}

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
   