@extends('master')

@section('content')



                <div id="page-content" class="header-static iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small ">

            <ul class="slides">

                    
                                <li style="background-image:url(wp-content/uploads/2017/05/9208665c-c25a-491e-9bf6-63af66250361.jpg)">
                 <div class="container text">
                        <h1 class="white  ">   Contact Us
  </h1>
						   <h1 class="white    khaled">   Mapso Marine Propulsion and Supply S.A.E (Egypt)
  </h1>
 
                    </div>
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
 <div class="container"><div class="row margin-leftright-null wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner row margin-leftright-null"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
    <!--  Contact Info  -->

    <!-- <div class="container"> -->

    <div class="padding-leftright-null">

        <div class="text">

            <h2 class="margin-bottom-null   line left">Get in touch  </h2>

            <p class="heading center grey margin-bottom-null"> Mapso Marine Propulsion and Supply S.A.E (Egypt) </p>

            <div class="padding-onlytop-md">

                <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem harum aspernatur sapiente error, voluptas fuga, laudantium ullam magni fugit. Qui!</p>

                <p>

                
                            <span class="contact-info">   Inquiries:
							<a href=" #"><em>    mapso@mapso.com  </em>

                            </a>

                            </span>

                            <br>
                             <span class="contact-info"> Sales: <a href="#"><em> sales@mapso.com
                            </em>

                            </a>

                            </span>

                            <br>
							
 
                </p>

                <p class="margin-md-bottom-null">                

                
                        <span class="contact-info">Monday to Friday 

                            <em>9.00 am to 12.00 pm</em> 

                        </span>

                        <br>

                                      

                </p>

            </div>

        </div>

    </div>

    <!-- </div> -->



    <!--  END Contact Info -->

</div></div></div><div class="padding-leftright-null wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
<div    >
<div class="screen-reader-response"></div>
<form action="{{ URL::to('/sendemail')  }}" method="post" class="wpcf7-form" >
        {{ csrf_field() }}
 
<div class="padding-leftright-null">
<div class="text padding-onlybottom-sm padding-md-top-null">
<div id="contact-form" class="  padding-md-topbottom-null">
<div class="row">
<div class="col-md-12">
          <span class="wpcf7-form-control-wrap your-name">
		  <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text form-field" id="name" aria-invalid="false" placeholder="Name" required="" ></span>
     </div>
<div class="col-md-12">
          <span class="wpcf7-form-control-wrap your-email">
  <input  required = required type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-field" required="" id="mail" aria-required="true" aria-invalid="false" placeholder="Email"></span>
     </div>
<div class="col-md-12">
          <span class="wpcf7-form-control-wrap subjectForm">
		  <input required = required  type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text form-field" id="subjectForm" aria-invalid="false" placeholder=" phone" required="" ></span>
     </div>
</div>
<div class="row">
<div class="col-md-12">
     <span class="wpcf7-form-control-wrap messageForm">
	 <textarea required = required name="messageForm" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea form-field" id="messageForm" aria-invalid="false" placeholder="Your Message" required=""> Your Message
	 </textarea></span> 
<div class="submit-area  ">
                <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit btn-alt" id="submit-contact"><span class="ajax-loader"></span>
          </div></div>
</div>
</div>
</div>
</div>
 </form>

</div></div></div></div></div></div></div></div></div>
 
 <section id="team" class="wpb_row vg_fixed row   "    ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12" style=" padding: 0px;">
<div class="vc_column-inner "><div class="wpb_wrapper">
 

        
<div class="vc_row wpb_row vc_inner   small" >

  <section id="news" class="page">
  
                       @foreach($ContactUs as $ContactUs1)

  
                                <div class="news-items equal one-columns" style="position: relative; height: 722px;">
   <div class="single-news one-item horizontal-news" style="position: absolute; left: 0px; top: 0px;">
                                        <article style="          border-radius: 10px;   box-shadow: none;  background: whitesmoke;">
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_left"  >
<iframe src="{{$ContactUs1->map_link}}" width="400px" height="230px"></iframe>
                                            </div>
                                            <div class="col-md-6 padding-leftright-null Propulsion_col Propulsion_right  "   >
                                                <div class="content">
													<h3 style="   font-weight: bold;"> {{$ContactUs1->title_c}}    
													<span style="    font-size: 16px;  color: #0092b6;"> {{$ContactUs1->titel_type}}  </span>   </h3>
                                                    <p >  
  <b>  Address :</b>    {{$ContactUs1->addr}}  <br>  
  <b>   Tel :</b>    {{$ContactUs1->tel}} <br>  
  <b>  Fax :</b>    {{$ContactUs1->fax}} <br>  
  
  
  </p>
                                                    <span class="category" style="    color: #3aa9c5;"> {{$ContactUs1->mail}} </span>                                                   
                                                    
                                                </div>
                                            </div>
                                         </article>
                                    </div>
                                                                   
                                                                </div>
																
																
																                   @endforeach

                            </section>





 </div></div></div></div></div></section>
 
 

    </div>
    </div>
 


 @endsection
