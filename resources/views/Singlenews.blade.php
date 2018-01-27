@extends('master')

@section('content')



 
                <div id="page-content" class="header-static  ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small ">

            <ul class="slides">

                        @foreach($news as $SingleBoat1)

                                <li style="background-image:url(    {{ URL::to('/').'/'.$SingleBoat1->img  }}     )">
                  <div class="container text" style="    top: 85%; "> 
    <h5 class="   SingleBoat_h2">  <?php  $small = substr($SingleBoat1->Title , 0, 30);  echo "$small".".."; ?>  </h5>
                    </div>
                 </li>  @endforeach
                               
            </ul>

        
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
   
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
	 

<section id="team" class="wpb_row vg_fixed row   "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style="     padding: 7px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null  text-center">

                          <p class="  Propulsion_p flex-animation">    {{$SingleBoat1->content}} 

</p>
  
  
    </div>



        
<div class="vc_row wpb_row vc_inner fullpage-wrap small"  >
 




 </div></div></div></div></div></section>
 
 
 
 
 
 <div class="col-md-12  text-center" style="    padding-top: 30px;">

        <h2 class="margin-bottom-null   line center">  Related News  </h2>
    </div>
 
 
 
 <section id="team" class="wpb_row vg_fixed row   " style="    background:  #e1e4e5;"  ><div class="container">
     
      
<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >	
	  
  
 
   	 
    @foreach($cat as $SingleBoat12)

  <section id="news" class="page">
                                <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="        box-shadow: none;  background: #e1e4e5;">
                                            <div class="col-md-6 padding-leftright-null" style="    width: 37%;">
  <img  class="image" style="    height: 229px; border-radius: 23px; background-image:url()" src="{{URL::to('/')}}/{{$SingleBoat12->img}} " alt="">
 <img style="           width: 54%;   padding-top: 20px;
    margin: auto;" src="{{ URL::to('/').'/'.$SingleBoat1->Boats_logo  }}" alt="">

 
                                            </div>
                                            <div class="col-md-6 padding-leftright-null"  style="    width: 60%;" >
                                                <div class="content" >
  <p> <?php  $small = substr($SingleBoat12->content , 0, 400);  echo "$small"."...."; ?>  </p>
<a href=" "> <span class="category" style="   float: right; color: #3aa9c5;">  >   Details   </span>   </a>                                                
                                                    
                                                </div>
                                            </div>
                                            <a href="{{ URL::to('/Singlenews').'/'.$SingleBoat12->id}}" class="link"></a>
                                        </article>     

                                    </div>
                                                                   
                                                                </div>
                            </section>     <div class ="full-width "style="     background: #ffffff;
    height: 2px;">  </div>             
							@endforeach  {{ $cat->links() }}






 </div></div></div></div></div></section>
 
  

    </div>
    </div>
 


 @endsection
