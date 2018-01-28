@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
 
                <a class="navbar-brand" href="{{ url ('') }}">  Welcome  Admin
 
  </a>
 
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                     
                        <li class="divider"></li>
 <li><a href=" "><i class="fa fa-sign-out fa-fw"></i>    {{{ Auth::user()->email }}} </a></li>
         <li><a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                             
                            <!-- /input-group -->
                        </li>
                        <li {{ (Request::is('admin/profile') ? 'class="active"' : '') }}>
                            <a href="{{ url ('admin/profile') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                         <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  Our Vessels   <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_Vessels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Vessels') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_Vessels/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Vessels/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                        
                             <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Vessels  cat  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_Boats_cat') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Boats_cat') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_Boats_cat/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Boats_cat/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                        
                        
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  Our News   <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_news/') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_news/') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_news/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_news/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  Our Brand   <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_Brand') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Brand') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_Brand/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Brand/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                        
                           <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  Contact Us  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_Contact_Us') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Contact_Us') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_Contact_Us/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Contact_Us/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                        
                            <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  Services <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_Services') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Services') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_Services/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Services/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                            <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>  About Us <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_About_Us') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_About_Us') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_About_Us/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_About_Us/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> subscribe <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_subscribe') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_subscribe') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_subscribe/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_subscribe/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> testimonial <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_testimonial') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_testimonial') }}">  All </a>
                                </li>
								<li {{ (Request::is('admin/admin_testimonial/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_testimonial/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                        
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> User <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('All_auth') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('All_auth') }}">  All </a>
                                </li>
								<li {{ (Request::is('auth/register1') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('auth/register1') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                         
                         
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Projects <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('admin/admin_Projects') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Projects') }}">  All </a>
                                </li>
                                <li {{ (Request::is('admin/admin_Projects/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('admin/admin_Projects/create') }}">  Add </a>
                                </li>
                                 
                            </ul>
                         </li> 
                         

                         
                        
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

