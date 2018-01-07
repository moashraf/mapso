@extends('master')

@section('content')



                <div id="page-content" class="header-static iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small ">

            <ul class="slides">

                    
                                <li style="background-image:url(wp-content/uploads/2017/05/Layer-69.jpg)">
                
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
	
<section id="team" class="wpb_row vg_fixed row   "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null  text-center">

        <h3 class="margin-bottom-null   line center"> Propulsion   </h3>
                         <p class="  Propulsion_p flex-animation">  
Mapso's core business is the supply of complete, integrated, guaranteed, propulsion systems, from the control head in the wheelhouse to the propeller. For every vessel, we resolve the hull, engine, and propeller equation, based on the load profile, the application and the area of operation.  </p>
  
  
    </div>



        
<div class="vc_row wpb_row vc_inner fullpage-wrap small"  >
 




 </div></div></div></div></div></section>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <section id="team" class="wpb_row vg_fixed row   " style="    background: whitesmoke;"  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >

  <section id="news" class="page">
                                <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: whitesmoke;">
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_left"  >
                                                <div class="image" style="    height: 229px; border-radius: 23px; background-image:url(wp-content/uploads/2017/04/trip8-1.jpg)"></div>
                                            </div>
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_right  "   >
                                                <div class="content">
												           

													<h3 style="   font-weight: bold;">       <img class=" Propulsion_slog_img " src="wp-content/uploads/2017/05/dddsd34.png" width="200">    </h3>
                                                     <p> Voith-Schneider propeller based systems for tugs, ferries, floating cranes and special applications. Typically coupled to Yanmar Medium speed engines. </p>
                                                    <span class="category" style="    color: #3aa9c5;"> > more</span>                                                   
                                                    
                                                </div>
                                            </div>
                                         </article>
                                    </div>
                                                                   
                                                                </div>
                            </section>





 </div></div></div></div></div></section>
 
 
 
 
 
 
 <section id="team" class="wpb_row vg_fixed row   "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">
    
<div class="vc_row wpb_row vc_inner fullpage-wrap small"  >
 
 
 <div class="col-lg-4">
<div class="  h-100" style="    background: #e1e4e5;">
<a class="sb-preview-img" href="    ">
 
<div class="card-body" style="    text-align: center;">
<h4 class="card-title  padingtext2 "  style="font-weight: bold;">    Prop drive   </h4>
<p class="card-text padingtext2 PROPULSIONmin-heighttext " style="    padding: 27px;">  
Typically supplied with steering system as well, suitable for low to medium speed application where Fishing boat and Micromega. </p>
</div>
 </a>
</div>
</div>



 <div class="col-lg-4">
<div class="  h-100" style="    background: #e1e4e5;">
<a class="sb-preview-img" href="    ">
 
<div class="card-body" style="    text-align: center;">
<h4 class="card-title  padingtext2 "  style="font-weight: bold;">    Sterndrive   </h4>
<p class="card-text padingtext2 PROPULSIONmin-heighttext " style="     padding: 27px;">     
Konrad based systems, typically coupled to Yanmar high speed engines. Picture of Nanoshuttle and RIB.  </p>
</div>
 </a>
</div>
</div>

 <div class="col-lg-4">
<div class="  h-100" style="    background: #e1e4e5;">
<a class="sb-preview-img" href="    ">
 
<div class="card-body" style="    text-align: center;">
<h4 class="card-title  padingtext2 " style="font-weight: bold;">     Jet drive   </h4>
<p class="card-text padingtext2 PROPULSIONmin-heighttext " style="     padding: 27px;">
Hamilton Jet based systems for fast craft, typically coupled to Scania or Yanmar engines. Picture of 25 m military boat and RIB. </p>
</div>
 </a>
</div>
</div>


 </div></div></div></div></div></section>
 
 


 
 
 
 
 
 
 
 
 
 

    </div>
    </div>
 


 @endsection
