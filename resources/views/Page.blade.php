@extends('master')

@section('content')


	<style>
	header nav.navbar{      display: none; }
		</style>

	

	
<section id="team" class="wpb_row vg_fixed row  fullpage-wrap small LandingPage " style="background-repeat: round;
    background-image: url( {{ URL::to('/') }}/wp-content/uploads/2017/05/P1111icker.jpg);
  " >
     <div style="       width: 250px;
    margin: auto;
    background: #f4f4f4;
    position: absolute;
    top: 0;
    left: 0;border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    right: 0;">
	
             <img style="     padding: 20px; " src="wp-content/uploads/2017/05/logo.png" width="200">   
			             <p style="   color: #0091b3;
    font-weight: 600;">   MARINE TECHNOLOGY </p>

		</div>
  <div class="container">
  
  

<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">    
<div class="vc_row wpb_row vc_inner" style="    padding-top: 40px;">

 
			@foreach($LandingPage as $LandingPage1)
	   
 
<div class="wpb_column vc_column_container vc_col-sm-4     ">
<div class="vc_column-inner ">
<div class="wpb_wrapper">
    <div class="padding-leftright-null">

        <div class="  padding-md-bottom-null">
       <a    href="  {{$LandingPage1->link}} ">   
 <div class="LandingPagediv">

             <img class="card-img-top  LandingPageimg" src=" {{$LandingPage1->mainimg}}" draggable="false">  <br><br>
 
             <img   src=" {{$LandingPage1->subimg}}" draggable="false">  

            <p class=" LandingPage_pppp "  >  {{$LandingPage1->tit}}   <br> {{$LandingPage1->titlin2}}  </p>
 
         </div>
 </a>
        </div>

    </div>
</div></div> <p class="LandingPagep">  {{$LandingPage1->sub_tit}} </p></div>			           


           @endforeach
		   
		   <div class="row">
    <div class="col-md-12"  > <img src="wp-content/uploads/2017/05/Untitled.png" class="cimglanding" draggable="false" style="    width: 13%;">
 </div>
</div>


 

 </div></div></div></div></div></section> 
 

 
 
              
@endsection
