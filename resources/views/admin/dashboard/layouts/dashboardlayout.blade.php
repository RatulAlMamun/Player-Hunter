<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Player Hunter-Dashboard</title>
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('public/nk/admin/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/nk/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('public/nk/admin/node_modules/rickshaw/rickshaw.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/nk/admin/bower_components/chartist/dist/chartist.min.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('public/nk/admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('public/nk/admin/images/favicon.html') }}" />

</head>
<body class="sidebar-dark">
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{route ('home.page') }}">Player Hunter</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
    </nav>

        <!-- partial -->
          <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="user-info">
              <div class="profile">
                <img src="http://via.placeholder.com/47x47" alt="">
              </div>
              <div class="details">
                <p class="user-name text-uppercase">{{ $admin->name }}</p>
                <p class="designation">Admin</p>
              </div>
            </div>
            <ul class="nav">
              <!--main pages start-->
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin-dashboard') }}">
                  <i class="mdi mdi-gauge menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin-edit-profile') }}">
                  <i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Edit Profile</span>
                </a>
              </li>
              <!--main pages end-->
              
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu1" aria-expanded="false" aria-controls="uiBasicSubmenu">
                  <i class="mdi mdi-buffer menu-icon"></i>
                  <span class="menu-title">Football Player List</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="uiBasicSubmenu1">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/football_player_list/forward') }}">Forward</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/football_player_list/midfilder') }}">Midfilder</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/football_player_list/defender') }}">Defender</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/football_player_list/goalkeeper') }}">Goalkeeper</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu2" aria-expanded="false" aria-controls="uiBasicSubmenu">
                  <i class="mdi mdi-buffer menu-icon"></i>
                  <span class="menu-title">Cricket Player List</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="uiBasicSubmenu2">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/cricket_player_list/batsman') }}">Batsman</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/cricket_player_list/bowler') }}">Bowler</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/cricket_player_list/allrounder') }}">Allrounder</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/cricket_player_list/wicketkeeper') }}">Wicketkeeper</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu5" aria-expanded="false" aria-controls="uiBasicSubmenu">
                  <i class="mdi mdi-buffer menu-icon"></i>
                  <span class="menu-title">Player Career</span>
                  <i class="mdi mdi-chevron-down menu-arrow"></i>
                </a>
                <div class="collapse" id="uiBasicSubmenu5">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/football_player_career_list') }}">Football Player</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/cricket_player_career_list') }}">Cricket Player</a>
                    </li>
                  </ul>
                </div>
              </li>
              <!--sample pages end-->
              <!--ui features start-->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('messages') }}">
                  <i class="mdi mdi-message-text menu-icon"></i>
                  <span class="menu-title">Message</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('report') }}">
                  <i class="mdi mdi-script menu-icon"></i>
                  <span class="menu-title">Report</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.registration') }}">
                  <i class="mdi mdi-account menu-icon"></i>
                  <span class="menu-title">New Admin</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('buyerlist') }}">
                  <i class="mdi mdi-human-greeting menu-icon"></i>
                  <span class="menu-title">Buyer List</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout.all') }}" class="nav-link">
                  <i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
              </li>
              <!-- ui end -->
              
            </ul>
          </nav>

        <div class="col-9" style="margin-left: 270px;">
    @yield('content')    
      </div>


    
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- Bootstrap-Script -->
  <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
  <!-- plugins:js -->
  <script src="{{ asset('public/nk/admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('public/nk/admin/node_modules/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/flot/jquery.flot.categories.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/rickshaw/vendor/d3.v3.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/rickshaw/rickshaw.min.js') }}"></script>
  <script src="bower_components/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/chartist-plugin-legend/chartist-plugin-legend.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('public/nk/admin/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('public/nk/admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('public/nk/admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('public/nk/admin/js/misc.js') }}"></script>
  <script src="{{ asset('public/nk/admin/js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('public/nk/admin/js/dashboard_1.js') }}"></script>
  <!-- End custom js for this page-->
</body>


</html>
