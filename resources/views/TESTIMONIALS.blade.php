@extends('master')

@section('content')



                <div id="page-content" class="header-static iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small">

            <ul class="slides">

                    
                                <li style="background-image:url({{ URL::to('/') }}/wp-content/uploads/2017/05/dddsfd.jpg)">
                    <div class="container text" style="    top: 35%; "> 
                        <h1 class="white flex-animation">  Testimonial </h1>
  
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

        <h2 class="margin-bottom-null   line center">    Testimonial  </h2>
    </div>
   
<div class="vc_row wpb_row vc_inner">
@foreach($Testimonial as $Testimonial1)
 
<div class="wpb_column vc_column_container vc_col-sm-4   revealOnScroll "  data-animation=" fadeInRight   " >
<div class="vc_column-inner ">
<div class="wpb_wrapper">
    <div class="padding-leftright-null">

        <div class="  padding-md-bottom-null">
  <div class="TESTIMONIALS_div">

             <img class="card-img-top TESTIMONIALS_img" src="{{$Testimonial1->testimonialimg}} " draggable="false">  
 

            <p class=" TESTIMONIALS_p "> {{$Testimonial1->testimonial_text}} </p>
			
            <p class=" sub_p  "> 
			{{$Testimonial1->testimonial_tag}} <br>
			 {{$Testimonial1->position}} <br>
			  {{$Testimonial1->company}} <br>


			</p>
        </div>
         </div>

    </div>
</div></div></div>

          @endforeach
 </div></div> 
</div></div></div></section>

    </div>
    </div>
 


 @endsection
