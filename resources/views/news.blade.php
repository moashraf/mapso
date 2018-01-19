@extends('master')

@section('content')

                <div id="page-content" class="header-static  iner_page_posetion ">
				
				
        <!--  Slider  -->

        <div id="flexslider-nav" class="fullpage-wrap small">

            <ul class="slides">
                                 <li style="background-image:url(wp-content/uploads/2017/05/Layer-18.jpg)">

                 </li>
                          
            </ul>
          </div>
        <!--  END Slider  -->
 <div id="home-wrap" class="content-section fullpage-wrap">							
   <nav class="navbar navbar-default" role="navigation" style="    margin-bottom: 0px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only"> Our News  filters  </span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Our News  Filters  </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
             <form  action="   " class="filters_form"   role="search">

      <li class="dropdown">
       <div class="form-group SingleBoat_filters ">
                        <select name="Application" class="form-control">
                            <option value="DESC">   name</option>
                            <option value="ASC"> name </option>
                        </select>
                    </div>
      </li>
	  
	  <li class="dropdown">
        <div class="form-group SingleBoat_filters ">
                        <select name="Market" class="form-control">
                            <option value="DESC">   Categories</option>
                            <option value="ASC">Categories</option>
                        </select>
                    </div>
      </li>
    
	
	  <li class="dropdown">
          <div class="form-group SingleBoat_filters ">
                        <select name="popularity" class="form-control">
                            <option value="DESC">Date </option>
                            <option value="ASC">Date </option>
                        </select>
                    </div>
      </li>
	<button type="submit" id="btn-filter-pending" class="btn btn-default SingleBoat_filters ">Update</button> 
    </form>	</ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search"  action="{{ URL::to('/search')  }} " >
        <div class="input-group">
            <input  id="tags2" type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search icon ion-ios-search " style="    font-size: 20px;
    font-weight: bold;
    height: auto;
    color: #000000;"></i></button>
            </div>
        </div>
        </form>
    </div>
    
  </div><!-- /.navbar-collapse -->
</nav>
 
 
 
 
 
 
 
 
 
 
 
  @foreach($slider as $slider1)<h1  class="toptextslider"> {{$slider1->slogan}}  </h1>                   @endforeach
	
<section id="team" class="wpb_row vg_fixed row "  ><div class="container">
<div class="text wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">

        <h2 class="margin-bottom-null   line center"> Our  News </h2>
    </div>
   
<div class="vc_row wpb_row vc_inner">

 
   @foreach($news as $Boats1)

 
 <div class="wpb_column vc_column_container vc_col-sm-3"  >
<div class="vc_column-inner ">
<div class="wpb_wrapper">


<a href=" {{ URL::to('/Singlenews').'/'.$Boats1->id  }}"> 
 <div class ="single-person" style="  padding-bottom: 20px;  padding-left: 0px; padding-right: 0px;">
        <div class="content">
            <img style="border-radius: 15px;" src="{{$Boats1->img}}" alt="">
 </div>
        <div class="description text-center">
        <h5 style="   font-weight: bold;"> {{$Boats1->Title}}
			    
      
 </h5>           
</div>
    </div></a> 
</div></div></div>
 




                   @endforeach {{ $news->links() }}





 </div></div> 
</div></div></div></section>

    </div>
    </div>
 
      <!--  الاشتراك  -->

 


@include('Subscribe.Subscribe')

 
<script>

$(document).ready(function(){
    $(window).load(function(){
       $('.wrap, a').toggleClass('active');
  
  return false;
    });
}); 

 

</script>
 

            <!-- ****************************************************************** الاشتراك -->



 @endsection
