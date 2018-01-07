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
    <div class="col-md-12 padding-leftright-null   text-center">

        <h2 class="margin-bottom-null   line center">  Projects   </h2>
		
		<br>
  <nav class="navbar navbar-default" role="navigation" style="    margin-bottom: 0px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">References filters  </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">References Filters  </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
     
      <li class="dropdown">
       <div class="form-group SingleBoat_filters ">
                        <select name="popularity" class="form-control">
                            <option value="DESC"> Application</option>
                            <option value="ASC"> Application </option>
                        </select>
                    </div>
      </li>
	  <li class="dropdown">
       <div class="form-group SingleBoat_filters ">
                        <select name="popularity" class="form-control">
                            <option value="DESC">Series  </option>
                            <option value="ASC">Series </option>
                        </select>
                    </div>
      </li>
	 
	
	  <li class="dropdown">
        <div class="form-group SingleBoat_filters ">
                        <select name="popularity" class="form-control">
                            <option value="DESC">Yard Name	</option>
                            <option value="ASC">Yard Name	</option>
                        </select>
                    </div>
      </li>
	<button type="submit" id="btn-filter-pending" class="btn btn-default SingleBoat_filters ">Update</button> </ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search icon ion-ios-search " style="    font-size: 20px;
    font-weight: bold;
    height: auto;
    color: #000000;"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
       <div class="form-group SingleBoat_filters ">
                        <select name="popularity" class="form-control">
                            <option value="DESC">Date </option>
                            <option value="ASC">Date </option>
                        </select>
                    </div>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
 <br>
 
 

 
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
        <th>  Application  </th>
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
