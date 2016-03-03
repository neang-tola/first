<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dashoboard of Backend Web ITs</title>

    <!-- Bootstrap CSS -->    
    <link href="{{ URL::asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ URL::asset('backend/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ URL::asset('backend/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('backend/css/font-awesome.min.css') }}" rel="stylesheet" />    

    <link href="{{ URL::asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
	  <link href="{{ URL::asset('backend/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
    @yield('style')
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      <header class="header dark-bg">
            <!--logo start-->
            <a href="{{ route('admin.dashboard') }}" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_key_alt"></i> Change Password</a>
                            </li>
                            <li>
                                <a href="{{ route('internal.logout') }}"><i class="icon_profile"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="{{ route('admin.dashboard') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
        				  <li>
        					  <a href="{{ route('admin.menu.list') }}"><i class="icon_document_alt"></i><span>Manage Menu</span></a>
        				  </li>
        				  <li>
        					  <a href="{{ route('admin.article.list') }}"><i class="icon_documents_alt"></i><span>Manage Article</span></a>
        				  </li>  
        				  <li>
        					  <a href="{{ route('admin.contact.list') }}"><i class="icon_genius"></i><span>Manage Contact</span></a>
        				  </li>   
        				  <li>
        					  <a href="{{ route('admin.category.list') }}"><i class="icon_table"></i><span>Manage Category</span></a>
        				  </li> 				  
        				  <li>
        					  <a href="{{ route('admin.slideshow.list') }}"><i class="icon_desktop"></i><span>Manage Slideshow</span></a>
        				  </li> 				  
        				  <li>
        					  <a href="{{ route('admin.gallery.list') }}"><i class="icon_table"></i><span>Manage Gallery</span></a>
        				  </li> 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">  
              @yield('main_content')          
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="{{ URL::asset('backend/js/jquery.js') }}"></script>
	  <script src="{{ URL::asset('backend/js/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ URL::asset('backend/js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('backend/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ URL::asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('backend/js/scripts.js') }}"></script>
    @yield('script')
  </body>
</html>
