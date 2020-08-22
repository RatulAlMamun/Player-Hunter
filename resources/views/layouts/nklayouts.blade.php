
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Game Info</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('public/nk/theme/css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('public/nk/theme/css/bootstrap.min.css') }}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="{{ asset('public/nk/theme/style.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('public/nk/theme/css/responsive.css') }}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{ asset('public/nk/theme/css/custom.css') }}">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="{{ asset('public/nk/theme/css/3dslider.css') }}" />
   <script src="{{ asset('public/nk/theme/js/jquery-1.11.1.min.js') }}"></script>

   <link href="{{ asset('public/nk/theme/css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css">
   <script src="{{ asset('public/nk/theme/js/3dslider.js') }}"></script>

   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="{{ asset('public/nk/theme/images/loading-img.gif') }}" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="full">
                           <div class="logo">
                              <a href="{{route ('home.page') }}"><img src="{{ asset('public/nk/theme/images/logo.png') }}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                         <form style="margin-top: 15px;" method="POST" action="{{ route('search.submit') }}">
                           @csrf
                           <input style="padding: 5px 5px;width: 220px;" type="text" placeholder="Search Player by POSITION..." name="position">
                           <button class="button" style="border-radius: 0px 0px 0px 0px;padding: 6px;margin-lfet:-20px" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <div class="col-md-5">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                              @if(auth()->guest())
                              <li class="login-modal dropdown">
                                  <a href="match" class="login dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Login</a>           
                                    <ul class="dropdown-menu nk">
                                             <li><a href="{{route ('player.login') }}">Player</a></li>
                                    </ul>
                              </li>
                              <li class="dropdown">
                                    <a href="match" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>Register</a>
                                    <ul class="dropdown-menu nk">
                                            <li><a href="{{route ('player.register') }}">Player</a></li>
                                    </ul>
                              </li>
                              @else

                              <li class="login-modal dropdown">
                                  <a href="{{ url('logout-all') }}" class="login"><i class="fa fa-user"></i>Logout</a>
                              </li>

                              @endif
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav text-center">
                                          <li class="active"><a href="{{route ('home.page') }}">Home</a></li>
                                          <li><a href="{{route ('about.page') }}">About</a></li>
                                          <li class="dropdown mega-dropdown">
                                             <a href="match" class="dropdown-toggle" data-toggle="dropdown">Player<span class="caret"></span></a>           
                                             <ul class="dropdown-menu">
                                                <li>
                                                   <ul class="menu-inner">
                                                      <li><a href="{{ route('footballplayerlist') }}">Football</a></li>
                                                      <li><a href="{{ route('cricketplayerlist') }}">Cricket</a></li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                                          <li class="dropdown mega-dropdown">
                                             <a href="match" class="dropdown-toggle" data-toggle="dropdown">Football Player<span class="caret"></span></a>				
                                             <ul class="dropdown-menu">
                                                <li>
                                                   <ul class="menu-inner">
                                                      <li><a href="{{route ('football.page', ['position' => 'Forward']) }}">Forward</a></li>
                                                      <li><a href="{{route ('football.page', ['position' => 'Midfielder']) }}">Midfielder</a></li>
                                                      <li><a href="{{route ('football.page', ['position' => 'Defender']) }}">Defender</a></li>
                                                      <li><a href="{{route ('football.page', ['position' => 'Goalkeeper']) }}">Goalkeeper</a></li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                                          <li class="dropdown mega-dropdown">
                                             <a href="match" class="dropdown-toggle" data-toggle="dropdown">Cricket Player<span class="caret"></span></a>           
                                             <ul class="dropdown-menu">
                                                <li>
                                                   <ul class="menu-inner">
                                                      <li><a href="{{route ('cricket.page', ['position' => 'Batsman']) }}">Batsman</a></li>
                                                      <li><a href="{{route ('cricket.page', ['position' => 'Bowler']) }}">Bowler</a></li>
                                                      <li><a href="{{route ('cricket.page', ['position' => 'Allrounder']) }}">Allrounder</a></li>
                                                      <li><a href="{{route ('cricket.page', ['position' => 'Wicketkeeper']) }}">Wicketkeeper</a></li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                                          <li><a href="{{route ('player.stars') }}">Stars</a></li>
                                          <li><a href="{{route ('blog.page') }}">Blog</a></li>
                                          <li><a href="{{route ('contact.page') }}">contact</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>



@yield('content')



 <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="{{route ('home.page') }}"><img src="{{ asset('public/nk/theme/images/footer-logo.png') }}" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="team.html">Our Team</a></li>
                           <li><a href="news.html">Latest News</a></li>
                           <li><a href="matche.html">Recent Matchs</a></li>
                           <li><a href="blog.html">Our Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class="fa fa-phone"></i> 123 456 7890</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2018 Distributed by <a href="https://themewagon.com/" target="_blank">International Player Hunting</a></p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="{{ asset('public/nk/theme/js/all.js') }}"></script>
      <!-- ALL PLUGINS -->
      <script src="{{ asset('public/nk/theme/js/custom.js') }}"></script>
      <script src="{{ asset('public/nk/theme/js/owl.carousel.js') }}"></script>
   </body>
</html>