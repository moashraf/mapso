@extends('master')

@section('content')



                <div id="page-content" class="header-static  iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small">

            <ul class="slides">

                    
                                <li style="background-image:url(wp-content/uploads/2017/05/Rdsdaectangle-1.jpg)">
                    <div class="container text" style="    top: 35%; "> 
                        <h2 class="white flex-animation" STYLE="     FONT-SIZE: 29PX;
    FONT-WEIGHT: BOLD;">   Our extensive experience is evident in our legacy  </h2>
  
                    </div>
                 </li>
                               
            </ul>

            
        </div>
        <!--  END Slider  -->

        <div id="home-wrap" class="content-section fullpage-wrap">							
  
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
	
<section id="team" class="wpb_row vg_fixed row "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">

        <h2 class="margin-bottom-null   line center">  References      </h2>

 
    </div>



        
<div class="vc_row wpb_row vc_inner">

 

<div class="container table_SCROLL">
  <h3> Delivered Projects (Since 2006)  </h3>
   <table class="table table-striped">
    <thead class="TABLE22">
      <tr>
        <th>Year</th>
        <th>Boat Type </th>
        <th>Yard Name</th>
		 <th>Boat Class/Series</th>
        <th> Boat Name	   </th>
        <th>  Application	  </th>
      </tr>
    </thead>
    <tbody>
      <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>  <tr>
	          <td>2015</td>
        <td>Suez Canal Authority</td>
        <td>Port Said Engineering works	 </td>
		 <td>Scorpion Series	</td>
        <td>Suez Canal Authority</td>
        <td>2 Fishing boats </td>
      </tr>
      
    </tbody>
  </table>
</div>  




 </div></div></div></div></div></section>

    </div>
    </div>
 


 @endsection
