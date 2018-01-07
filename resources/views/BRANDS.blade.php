@extends('master')

@section('content')




	
<section id="team" class="wpb_row vg_fixed row  fullpage-wrap small LandingPage " style="background-repeat: round;
    background-image: url({{ URL::to('/') }}/wp-content/uploads/2017/05/Rectangle-1.jpg); " >
  <div class="container">
  
  

<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">    
<div class="vc_row wpb_row vc_inner"  >

  @foreach($BRANDS as $BRANDS1)

    <div class="col-sm-2 ">
	                        <a href="{{$BRANDS1->logolink}} " >   

       <img  class="brandclo" src="{{$BRANDS1->imgurl}} " class="img-responsive"   ></a>
    </div>  
                   @endforeach
				   
				   
				   <br>
				   <br>
				   
				   
				               <p class="BRANDS1_p "  >    We build long term partnership with our clients, our suppliers and our employees.
We have strategic alliances with: Voith, Yanmar, Scania, Hamilton Jet, ZF, Lomocean, Camarc, Snijtech </p>

  

 </div></div></div></div></div></section>  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
 



 @endsection
