@extends('master')

@section('content')



                <div id="page-content" class="header-static iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small">

            <ul class="slides">

                    
                                <li style="background-image:url({{ URL::to('/') }}/wp-content/uploads/2017/05/dddsfd.jpg)">
                    <div class="container text" style="    top: 35%; "> 
                        <h1 class="white flex-animation">  Explore our range of     Vessels</h1>
  
                    </div>
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
	
<section id="team" class="wpb_row vg_fixed row "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">

        <h2 class="margin-bottom-null   line center"> OUR  VESSELS </h2>
    </div>
   
<div class="vc_row wpb_row vc_inner">

 
   @foreach($Boats as $Boats1)

 
 <div class="wpb_column vc_column_container vc_col-sm-3"  >
<div class="vc_column-inner ">
<div class="wpb_wrapper">


<a href=" {{ URL::to('/SingleBoat').'/'.$Boats1->id  }}"> 



 <div class ="single-person" style="  padding-bottom: 20px;  padding-left: 0px; padding-right: 0px;">
        <div class="content">
            <img style="border-radius: 15px;" src="{{$Boats1->Boatsimg}}" alt="">
 </div>
        <div class="description text-center">
<img style="    width: 72%;  margin: auto;" src="		{{ URL::to('/').'/'.$Boats1->Boats_logo  }}  "  >		
                 
</div>
    </div></a> 
</div></div></div>
 




                   @endforeach





 </div></div>{{ $Boats->links() }}
</div></div></div></section>

    </div>
    </div>
 


 @endsection
