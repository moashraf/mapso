<!DOCTYPE html>
 <html lang="en-US">
    
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
		 @foreach($getallnews as $hero)

  
   <script language="Javascript">
  var msg1 = " <------ Welcome to Mapso ------> ";
  var speed=100;
  function ScrollTitle() {
  document.title=msg1;
  msg1=msg1.substring(1,msg1.length)+msg1.charAt(0);
  setTimeout("ScrollTitle()",speed);
  }
  ScrollTitle();
  </script>
  <title> {{$hero->Websitename}} </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel='dns-prefetch' href='http://maps.googleapis.com/' />
<link rel='dns-prefetch' href='http://oss.maxcdn.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
  <link rel='stylesheet' id='contact-form-7-css'  href=  " {{ asset('wp-content/plugins/contact-form-7/includes/css/styles4906.css') }} " type='text/css' media='all' /> 
<link rel='stylesheet' id='style-css'  href=  " {{ asset('wp-content/themes/dolomia/style29ba.css') }} "  type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-min-css'  href= " {{ asset('wp-content/themes/dolomia/assets/css/bootstrap/bootstrap.min66f2.css') }} "  type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-theme-min-css'  href=   " {{ asset('wp-content/themes/dolomia/assets/css/bootstrap/bootstrap-theme.min66f2.css') }} " type='text/css' media='all' />
<link rel='stylesheet' id='style-custom-css'  href= " {{ asset('wp-content/themes/dolomia/assets/css/styleef15.css') }} " type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-min-css'  href=   " {{ asset('wp-content/themes/dolomia/assets/css/font-awesome.min66f2.css') }} " type='text/css' media='all' />
<link rel='stylesheet' id='ionicons-min-css'  href=  " {{ asset('wp-content/themes/dolomia/assets/css/ionicons.min66f2.css') }} "  type='text/css' media='all' />
<link rel='stylesheet' id='puredesign-css'  href=    " {{ asset('wp-content/themes/dolomia/assets/css/puredesign66f2.css') }} " type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href=  " {{ asset('wp-content/plugins/js_composer/assets/lib/bower/flexslider/flexslider.min972f.css') }} "  type='text/css' media='all' />
<link rel='stylesheet' id='carousel-css'  href=  " {{ asset('wp-content/themes/dolomia/assets/css/owl.carousel66f2.css') }} "   type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href=  " {{ asset('wp-content/themes/dolomia/assets/css/magnific-popup66f2.css') }} " type='text/css' media='all' />
<link rel='stylesheet' id='jquery-fullPage-css'  href=   " {{ asset('wp-content/themes/dolomia/assets/css/jquery.fullPage66f2.css') }} "  type='text/css' media='all' />
<link rel='stylesheet' id='newsletter-subscription-css'  href=   " {{ asset('wp-content/plugins/newsletter/subscription/style1845.css') }} "   type='text/css' media='all' />
 
<link rel='stylesheet' id='js_composer_front-css'  href= "{{ asset('wp-content/plugins/js_composer/assets/css/js_composer.min972f.css') }}" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('wp-includes/js/jquery/jqueryb8ff.js') }}" ></script>
<script type='text/javascript' src=  "{{ asset('wp-includes/js/jquery/jquery-migrate.min330a.js') }}"   ></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js?ver=3.7.2'></script>
<![endif]-->
<link rel='https://api.w.org/' href='index52f0.html?rest_route=/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href=" " /> 
<meta name="generator" content="WordPress 6.7.5" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href=" " />
<link rel="alternate" type="text/xml+oembed" href=" " />
<meta name="generator" content=" "/>
 
    </head>

     
    <body class="home page-template page-template-template page-template-home-classic page-template-templatehome-classic-php page page-id-262 custom-background wpb-js-composer js-comp-ver-5.0.1 vc_responsive">

      

        <!--  loader  -->

        <div id="myloader">

            <p class="loader">

                <span class="inner-loader"> Loading ...</span>

            </p>

        </div>

        

        <!--  Main Wrap  -->

        <div id="main-wrap" class="full-width">

            <!--  Header & Menu  -->

            <header id="header" class="fixed transparent full-width">

                <div class="container" STYLE="     width: 1220px;" >

                    <nav class="navbar navbar-default white" id="myP" >

                        <!--  Header Logo  -->
                        <a   href=" {{ URL::to('/main')}}">
                        <div id="logo">
 <a class="navbar-brand" href=" {{ URL::to('/main')}}">
<img src="    {{ URL::to('/').'/'.$hero->logo  }}    " class="normal" alt="">
 <img src=" {{ URL::to('/').'/'.$hero->logo  }} " class="normal white-logo" alt="">
 </a>
                        </div> 
						</a>
 @endforeach
                        <!--  END Header Logo  -->

                        <!--  Classic menu, responsive menu classic  -->

                        <div id="menu-classic">

                            <div class="menu-holder" id="nav1">

  <ul>
 
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children submenu"><a  href="{{ URL::to('/Services')}}">Services </a> </li>
<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a  href="{{ URL::to('/Boats')}}">Our Vessels </a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children submenu"><a  href="{{ URL::to('/Propulsion')}}">Propulsion   </a> </li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children submenu"><a  href="{{ URL::to('/R&D ')}}"> R&D   </a> </li>   
<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a  href="{{ URL::to('/References')}}">References   </a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a href="{{ URL::to('/TESTIMONIALS')}}">Testimonials</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a href="{{ URL::to('/Projects')}}">Projects </a></li>
 
	 
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a  href="{{ URL::to('/allnews')}}">News </a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a  href="{{ URL::to('/BRANDS')}}">Brands   </a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page submenu"><a  href="{{ URL::to('/ContactUs')}}">Contact Us   </a></li>

 </ul>
                                    <!-- Search Icon -->
                                <!-- <ul> -->

                                  

 <li class="menumohamed" >
<form id="demo-2" action="{{ URL::to('/search')  }} ">

<div class="ui-widget">
	<input id="tags"  type="search" placeholder="Search" name="q" >

 </div>
</form>    

                                     </li>   

									
									
                                <!-- </ul> -->

                            </div>  



                        </div>
                              
                        <!--  END Classic menu, responsive menu classic  -->

                        <!--  Button for Responsive Menu Classic  -->

                        <div id="menu-responsive-classic">

                            <div class="menu-button">

                                <span class="bar bar-1"></span>

                                <span class="bar bar-2"></span>

                                <span class="bar bar-3"></span>

                            </div>

                        </div>

                        <!--  END Button for Responsive Menu Classic  -->

                     

                    </nav>

                </div>

            </header>

			
			
		@yield('content')	
		
<!--  Footer. Class fixed for fixed footer  -->
            <footer class="  full-width">
                <div class="container">
                  
                    <div class="copy">
                        <div class="row no-margin">
                            <div class="container" style="      font-weight: bold;  text-align: center;">
							
							<nav class="navbar navbar-default backgroundnoclor footermenue">
  <div class="container-fluid">
        <ul class="nav navbar-nav  ">
      <li  ><a  class=" footerborder-righta "  href="{{ URL::to('/main')}}"> Home   </a></li>
      <li><a  class=" footerborder-righta "  href="{{ URL::to('/AboutUs')}}"> About Us </a></li>
      <li><a class=" footerborder-righta "  href="{{ URL::to('/allnews')}}"> News    </a></li>
      <li><a  class=" footerborder-righta "  href="#">  Team & Career   </a></li>
       <li><a  class=" footerborder-righta "  href="{{ URL::to('/CSR')}}"> CSR     </a></li>
      <li><a class=" footerborder-righta "  href="{{ URL::to('/ContactUs')}}">   Contact Us </a></li>
     </ul>
  </div>
</nav>
 <ul class="social">
  <li> <a href="https://www.facebook.com/MapsoMarine/"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
 <li> <a href="https://www.youtube.com/user/MapsoMarine"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
								 
                                                                  </ul>
 <br>   <b>                               
 Copyright @ 2017 Mapso </b> 
   


								</div>
                            
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END Footer. Class fixed for fixed footer  -->
        </div>
        <!--  Main Wrap  -->
		   <script type='text/javascript' src=  " {{ asset('wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js') }} "  ></script>  
<script type='text/javascript' src=   " {{ asset('wp-content/plugins/contact-form-7/includes/js/scripts4906.js') }} "  ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/bootstrap/bootstrap.min66f2.js') }} "  ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/jquery.flexslider-min66f2.js') }} "  ></script>
<script type='text/javascript' src=   " {{ asset('wp-content/themes/dolomia/assets/js/jquery.fullPage.min66f2.js') }} "  ></script>
<script type='text/javascript' src=   " {{ asset('wp-content/themes/dolomia/assets/js/owl.carousel.min66f2.js') }} "  ></script>
<script type='text/javascript' src=   " {{ asset('wp-content/themes/dolomia/assets/js/isotope.min66f2.js') }} "  ></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDpxLVjd9mHpWb7ghOCk7UoVwrb4NBcvaU'></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/jquery.magnific-popup.min66f2.js') }} " ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/jquery.scrollTo.min66f2.js') }} " ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/smooth.scroll.min66f2.js') }} "  ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/jquery.appear66f2.js') }} " ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/jquery.countTo66f2.js') }} "  ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/jquery.scrolly66f2.js') }} "  ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/plugins-scroll66f2.js') }} "  ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/imagesloaded.min66f2.js') }} "  ></script>
<script type='text/javascript' src=   " {{ asset('wp-content/themes/dolomia/assets/js/pace.min66f2.js') }} " ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/themes/dolomia/assets/js/main66f2.js') }} " ></script>
 <script type='text/javascript' src=    " {{ asset('wp-content/plugins/newsletter/subscription/validate1845.js') }} " ></script>
<script type='text/javascript' src=  " {{ asset('wp-includes/js/wp-embed.min66f2.js') }} " ></script>
<script type='text/javascript' src=  " {{ asset('wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min972f.js') }} "  ></script>
  
<!--   الاوتو كمبليت -->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
     <script>
  $( function() {
    var availableTags =<?php      $data = DB::table('boats')->pluck('Boatsname'); 
 echo $data ; 

?>;
    $( "#tags2" ).autocomplete({
 
      source: availableTags
    });
  } );
  </script>
  
    <script>
  $( function() {
    var availableTags =<?php echo $data ;  ?>;
  

    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  
  <!--   الاوتو كمبليت -->

    <!--    المنيو تبقي توب . -->

  <script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("myP").className = "testonscroll navbar navbar-default white ";
    } else {
        document.getElementById("myP").className = " navbar navbar-default white ";
    }
}
</script>
    <!--    المنيو تبقي توب . -->


  
  
  
<script> 
function extractPageName(hrefString)
{
	var arr = hrefString.split('/');
	return  (arr.length<2) ? hrefString : arr[arr.length-2].toLowerCase() + arr[arr.length-1].toLowerCase();               
}

function setActiveMenu(arr, crtPage)
{
	for (var i=0; i<arr.length; i++)
	{
		if(extractPageName(arr[i].href) == crtPage)
		{
			if (arr[i].parentNode.tagName != "DIV")
			{
				arr[i].className = " menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children submenu active";
				arr[i].parentNode.className = "menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children submenu active";
			}
		}
	}
}

function setPage()
{
	hrefString = document.location.href ? document.location.href : document.location;

	if (document.getElementById("nav1")!=null)
		setActiveMenu(document.getElementById("nav1").getElementsByTagName("a"), extractPageName(hrefString));
}
setPage();
 </script>
 
   
 
 
  </body>

</html>

 



