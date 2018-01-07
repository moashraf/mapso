@extends('master')

@section('content')



                <div id="page-content" class="header-static  iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small">

            <ul class="slides">

                    
                                <li style="background-image:url(wp-content/uploads/2017/05/Rdsdaectangle-1.jpg)">
                    <div class="container text" style="    top: 35%; "> 
                        <h2 class="white flex-animation" STYLE="     FONT-SIZE: 29PX;
    FONT-WEIGHT: BOLD;">  Corporate Social Responsibility
 </h2>
          <h2 class="white flex-animation" STYLE="     
    FONT-WEIGHT: BOLD;">   Because we care about our community and take corporate social responsibility seriously; 
Mapso supports several entities
 </h2>
  
  
                    </div>
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
	
  
 <section id="team" class="wpb_row vg_fixed row   " style="    background: whitesmoke;"  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >

  <section id="news" class="page">
       <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: whitesmoke;">
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_left"  >
                                                <div class="image" style="    height: 229px; border-radius: 23px; background-image:url(wp-content/uploads/2017/05/tahtib.png)"></div>
                                            </div>
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_right  "   >
                                                <div class="content">
												           

<br>                                                     <p> 	
Corporate Social Responsibility
Because we care about our community and take corporate social responsibility seriously; 
Mapso supports several  </p>
                                                    <span class="category" style="    color: #3aa9c5;"> www.tahtib.com </span>                                                   
                                                    
                                                </div>
                                            </div>
                                         </article>
                                    </div>
                                                                   
                                                                </div>  
																
																
																  <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: whitesmoke;">
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_left"  >
                                                <div class="image" style="    height: 229px; border-radius: 23px; background-image:url(wp-content/uploads/2017/05/egypmusic.jpg)"></div>
                                            </div>
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_right  "   >
                                                <div class="content">
												           

<br>                                                     <p> 	
Corporate Social Responsibility
Because we care about our community and take corporate social responsibility seriously; 
Mapso supports several  </p>
                                                    <span class="category" style="    color: #3aa9c5;">www.egyptmusic.org </span>                                                   
                                                    
                                                </div>
                                            </div>
                                         </article>
                                    </div>
                                                                   
                                                                </div>  
																
																
																  <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: whitesmoke;">
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_left"  >
                                                <div class="image" style="    height: 229px; border-radius: 23px; background-image:url(wp-content/uploads/2017/05/tahtib.png)"></div>
                                            </div>
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_right  "   >
                                                <div class="content">
												           

<br>                                                     <p> 	
Corporate Social Responsibility
Because we care about our community and take corporate social responsibility seriously; 
Mapso supports several  </p>
                                                    <span class="category" style="    color: #3aa9c5;"> www.tahtib.com </span>                                                   
                                                    
                                                </div>
                                            </div>
                                         </article>
                                    </div>
                                                                   
                                                                </div>  
																
																
																
                            </section>





 </div></div></div></div></div></section>

    </div>
    </div>
 


 @endsection
