@extends('master')

@section('content')
 


 <div id="page-content" class="header-static iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small">

            <ul class="slides">

                    
                                <li style="background-image:url({{ URL::to('/') }}/wp-content/uploads/2017/05/dddsfd.jpg)">
                    <div class="container text" style="    top: 35%; "> 
                        <h1 class="white flex-animation">  Services  </h1>
                          <h2 class="white khaled  ">   We are authorized service dealers for the following  </h2>

                    </div>
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->
 
        <div id="home-wrap" class="content-section fullpage-wrap">							
  
	
<section id="team" class="wpb_row vg_fixed row "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style="    text-align: center; " >
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null  text-center" >

        <h2 class="margin-bottom-null   line center">    Services  </h2>
    </div>
   
<div class="vc_row wpb_row vc_inner">

    
      @foreach($Services as $Services1)  

    
<div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">


    <div class="padding-leftright-null">

        <div class="text padding-md-bottom-null">

         <img src="{{ URL::to('/').'/'.$Services1->img  }}"   height="42" width="42">
 

            <h6 class="heading margin-bottom-extrasmall">     {{$Services1->titel_Services}}                
  </h6>

            <p class="margin-bottom-null">     {{$Services1->details}}      </p>

        </div>

    </div>





</div></div></div>

 
    
      @endforeach
    
    
    </div></div> 
</div></div></div></section>

    </div>
    </div>
 


 @endsection
