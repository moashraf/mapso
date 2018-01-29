@extends('master')
@section('content')
<!--  END Header & Menu  -->
<div id="page-content" class="header-static footer-fixed">
   <!--  Slider  -->
   <div id="flexslider-nav" class="fullpage-wrap small">

   <ul class="slides">
                    @foreach($slider as $hero)

         <li style="background-image:url({{$hero->sliderimg}} )">
            <div class="gradient dark">
        <div class="container text  slidertoptext ">
      <img src="wp-content/uploads/2017/05/Untitled.png" class=" imginslider"  >
      <h1 class="white  ">   {{$hero->slidertit}}  </h1>
      <h1 class="white    khaled">    {{$hero->slidersub_tit}}  </h1>
      <h2 class="white  sliderh2" >   {{$hero->slider_text}}  </h2>
      <a href="{{$hero->button_link}} " class="shadow btn-alt small activetwo margin-bottom-null  "> {{$hero->buttonname}} </a>
   </div>
   </div>
         </li>
          @endforeach
      </ul>
      <div class="slider-navigation">
         <a href="#" class="flex-prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
         <div class="slider-controls-container"></div>
         <a href="#" class="flex-next"><i class="icon ion-ios-arrow-thin-right"></i></a>
      </div>
   </div>          

   <!--  END Slider  -->
       <h1  class="toptextslider"> {{$hero->slogan}}   </h1>
   <div id="home-wrap" class="content-section fullpage-wrap">
      <div class="fullpage-wrap small">
         <div class="wpb_column vc_column_container vc_col-sm-12 graybg " >
            <div class="vc_column-inner ">
               <div class="wpb_wrapper">
                  <!-- Section About -->
                  <div id="page-content" class="padding-onlybottom-sm">
                     <div class="col-md-12 padding-leftright-null text-center grey-background">
                        <h2 class="margin-bottom-null title simple left titelces revealOnScroll "  data-animation=" fadeInRight   ">   OUR VESSELS   </h2>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-12 revealOnScroll "  data-animation=" fadeInRight   ">
                        <div class="vc_column-inner vc_custom_1499242244791">
                           <div class="wpb_wrapper">
                              <!--  Slider  -->
                              <div class="home-carousel">
                                 @foreach($Boats as $Boats1)
                                 <!--  Single Item  -->
                                 <div class="item revealOnScroll "  data-animation="fadeInRight" >
                                    <a   href=" {{ URL::to('/SingleBoat').'/'.$Boats1->id  }} ">
                                       <div class="image" style="background-image:url( {{$Boats1->Boatsimg}} )">
                                       </div>
                                    </a>
                                    <img   class="titelimglog" style="     width: 63%;
                                       padding: 40px;
                                       margin: auto;     display: none;"  src="{{ URL::to('/').'/'.$Boats1->Boats_logo  }} " draggable="false">     
                                 </div>
                                 <!--  END Single Item  -->
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END Section About -->
               </div>
            </div>
         </div>
      </div>
      <div class="row no-margin text-center grey-background wpb_column vc_column_container vc_col-sm-12">
         <div class="vc_column-inner ">
            <div class="wpb_wrapper">
               <div class="vc_row wpb_row vc_inner padding-leftright-null">
                  <!--  Slider  -->
                  <div id="flexslider" class="fullpage-wrap small no_top_margen revealOnScroll "  data-animation=" fadeInRight   ">
                     <ul class="slides">
                        <li  style=" padding-top:36px; background-image: url({{ URL::to('/')}}/wp-content/uploads/2017/05/news3.jpg) ;"   >
                           <div class="container text text-center titelbac">
                              <div class="col-md-12 padding-leftright-null text-center">
                                 <h2 class="margin-bottom-null   center wit  tite PROPULSIONtitel">PROPULSION   </h2>
                                 <p class="heading center    wit revealOnScroll "  data-animation=" fadeInRight  "> Mapso's original business is complete, integrated, guaranteed, propulsion systems, from the control head in the wheelhouse to the propeller. For every vessel, we resolve the hull, engine, and propeller equation, based on the load profile, the application and the area of operation.</p>
                              </div>
                              <div class="row">
                                 @foreach($Propulsion as $Propulsion1)
                                 <div class="col-lg-3 revealOnScroll "  data-animation=" fadeInRight  " >
                                    <div class="card h-100">
                                       <a class="sb-preview-img" href=" ">
                                          <img class="card-img-top" src="{{$Propulsion1->propulsionimg}}  "  >
                                          <div class="card-body">
                                             <h4 class="card-title  padingtext2 ">    {{$Propulsion1->propulsionname}}   </h4>
                                             <p class="card-text padingtext2 PROPULSIONmin-heighttext " >     {{$Propulsion1->propulsiondesc}}  </p>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                           <div class="gradient dark"></div>
                        </li>
                     </ul>
                  </div>
                  <!--  END Slider  -->
                  <div class="container BRANDS ">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              <div class="col-md-12 padding-leftright-null text-center">
                                 <h3 class="margin-bottom-null   center  tite ">BRANDS   </h3>
                              </div>
                              <!--  Sponsor  -->
                              <div class="row no-margin">
                                 <div class="container text">
                                    <div class="col-md-12 sponsor-carousel padding-leftright-null revealOnScroll "  data-animation=" fadeInRight   ">
                                       @foreach($Brand as $Brand1)
                                       <div class="item">
                                          <a href="{{$Brand1->logolink}}"  >  
                                          <img class="center" src="{{ $Brand1->imgurl  }}"  >
                                          </a>
                                       </div>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                              <!--  Sponsor  -->
                              <a href="{{URL::to('/BRANDS')}}" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity animated fadeInUp">   SEE ALL</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="page-content" class="padding-onlybottom-sm">
                     <div class="col-md-12 padding-leftright-null text-center  grey-backgroundDARK ">
                        <h2 class="margin-bottom-null title simple left titelces revealOnScroll "  data-animation=" fadeInRight   ">      NEWS </h2>
                     </div>
                     <div class="wpb_column vc_column_container vc_col-sm-12 grey-backgroundDARK ">
                        <div class="vc_column-inner vc_custom_1499242244791">
                           <div class="wpb_wrapper revealOnScroll "  data-animation=" fadeInRight   ">
                              <!--  Slider  -->
                              <div class="home-carousel">
                                 @foreach($News as $News1)
                                 <!--  Single Item  -->
                                 <div class="item">
                                    <a   href="  ">
                                       <div class="image" style="background-image:url( {{$News1->img}} )">
                                       </div>
                                    </a>
                                 </div>
                                 <!--  END Single Item  -->
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 padding-leftright-null text-center grey-backgroundDARK">
                        <p class=" heading center     NEWSP ">
                           Mapso is exhibiting in<br>
                           SEATRADE OFFSHORE MARINE AND WORKBOATS MIDDLE EAST<br>
                           25-27 September 2017 
                           Abu Dhabi National Exhibition Centre <br>
                           United Arab Emirates
                        </p>
                        <p  STYLE="PADDING-BOTTOM: 20PX;" class="heading center grey margin-bottom-null"> 
                           <a  Class=" LINKCOLOR"  href="{{ URL::to('/')  }}/allnews"> READ MORE   </a>
                        </p>
                     </div>
                  </div>
                  <div class=" page-content TESTIMONIALS_background">
                     <div class="container  ">
                        <div class="col-md-12 padding-leftright-null text-center  ">
                           <h2 class="margin-bottom-null title simple left titelces wit " style=" color: white  !important;">   TESTIMONIALS   </h2>
                        </div>
                        @foreach($Testimonial as $Testimonial1)
                        <div class="wpb_column vc_column_container vc_col-sm-4   revealOnScroll "  data-animation=" fadeInRight   " >
                           <div class="vc_column-inner ">
                              <div class="wpb_wrapper">
                                 <div class="padding-leftright-null">
                                    <div class="  padding-md-bottom-null">
                                       <a    href="{{ URL::to('/')  }}/TESTIMONIALS">
                                          <div class="TESTIMONIALS_div">
                                             <img class="card-img-top TESTIMONIALS_img" src="{{$Testimonial1->testimonialimg}} " draggable="false">  
                                             <p class=" TESTIMONIALS_p "> {{$Testimonial1->testimonial_text}} </p>
                                             <p class=" sub_p  "> 
                                                {{$Testimonial1->testimonial_tag}} <br>
                                                {{$Testimonial1->position}} <br>
                                                {{$Testimonial1->company}} <br>
                                             </p>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                     <br>
                     <a href="{{URL::to('/TESTIMONIALS')}}" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity animated fadeInUp">   SEE ALL</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
<script>
   $(function() {
   
     var $window           = $(window),
         win_height_padded = $window.height() * 1.1,
         isTouch           = Modernizr.touch;
   
     if (isTouch) { $('.revealOnScroll').addClass('animated'); }
   
     $window.on('scroll', revealOnScroll);
   
     function revealOnScroll() {
       var scrolled = $window.scrollTop(),
           win_height_padded = $window.height() * 1.1;
   
       // Showed...
       $(".revealOnScroll:not(.animated)").each(function () {
         var $this     = $(this),
             offsetTop = $this.offset().top;
   
         if (scrolled + win_height_padded > offsetTop) {
           if ($this.data('timeout')) {
             window.setTimeout(function(){
               $this.addClass('animated ' + $this.data('animation'));
             }, parseInt($this.data('timeout'),10));
           } else {
             $this.addClass('animated ' + $this.data('animation'));
           }
         }
       });
       // Hidden...
      $(".revealOnScroll.animated").each(function (index) {
         var $this     = $(this),
             offsetTop = $this.offset().top;
         if (scrolled + win_height_padded < offsetTop) {
           $(this).removeClass('animated fadeInUp flipInX lightSpeedIn  fadeInRight ')
         }
       });
     }
   
     revealOnScroll();
   });
   
</script>
@include('Subscribe.Subscribe')
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.js"></script>
@endsection