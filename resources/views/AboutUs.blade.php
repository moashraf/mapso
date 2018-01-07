@extends('master')

@section('content')



                <div id="page-content" class="header-static iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small ">

            <ul class="slides">

                    
                                <li style="background-image:url(wp-content/uploads/2017/05/about-photo.jpg)">
<div class="container text"> 
                                                        <h1 class="white  ">  About Us </h1>

                    </div>
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
   
 
 <section id="team" class="wpb_row vg_fixed row   " style="    background: whitesmoke;"  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >

  <section id="news" class="page">
                                <div class="container"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="padding-leftright-null">

        <div data-responsive="parent-height" data-responsive-id="info" class="text padding-md-bottom-null">

            <h2 class="margin-bottom-null   line left" style="padding-bottom: 20px;">   About Us </h2>

            <p class="heading center grey margin-bottom-null"> Mapso Marine Technology
 </p>

            <div  >

                <p class="margin-bottom-null">  Mapso was established in 1976 in the wake of the Suez Canal re-opening in 1975.

Mapso supplied the backbone of the tugs, ferries and floating cranes of the Suez Canal Authority back then.

The SCA remains one of our strategic accounts and we are proud to be part of the New Suez Canal project in progress.

We provid components, systems and services to shipyards and end users. See our references. We have developed vessel ranges in cooperation with the best design and naval architecture firms. See our portfolio. 

We can supply these proven vessels in the form of a CKD (completely knocked down kit), to partner yards worldwide Become a partner yard.

We also provide turnkey vessels, in particular our smallest model the Nano.</p>

            </div>

        </div>

    </div>

    

</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">


    <div class="padding-leftright-null">

        <div data-responsive="child-height" data-responsive-id="info" class="text padding-md-top-null responsive-md-height-auto" style="height: 399px;">

            <!--  Skills  -->

            <section id="skills" class=" padding-onlytop-md paddin-md-null">

                <div class="col-md-12 padding-leftright-null">

                    <ul class="skill-list padding-sm-bottom">
  @foreach($AboutUs as $AboutUs1)
                    
                            <em>{{$AboutUs1->tit}}  </em>

                            <li>

                                <span class="border-color" data-percent="{{$AboutUs1->percentage}}%" style="width: {{$AboutUs1->percentage}}%;"></span>

                                <span class="label"><span class="count" data-to="{{$AboutUs1->number}}"> </span> </span>

                            </li>
  @endforeach
                        
                        
                    </ul>

                </div>

            </section>

            <!--  END Skills  -->

        </div>

    </div>

</div></div></div></div> 
                            </section>





 </div></div></div></div></div></section>
 
 
 
 
  
 
 


 
 
 
 
 
 
 
 
 
 

    </div>
    </div>
 


 @endsection

