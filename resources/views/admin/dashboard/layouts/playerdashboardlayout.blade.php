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
                <p class="user-name">{{ $player->name }}</p>
                <p class="designation">{{$player->game_type}} Player</p>
              </div>
            </div>
            <ul class="nav">
              <!--main pages start-->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('player.dashboard') }}">
                  <i class="mdi mdi-gauge menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <!--main pages end-->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('player.edit') }}">
                  <i class="mdi mdi-face menu-icon"></i>
                  <span class="menu-title">Edit Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('buyer.request.page') }}">
                  <i class="mdi mdi-human-greeting menu-icon"></i>
                  <span class="menu-title">Buyer Request</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('playervideos') }}">
                  <i class="mdi mdi-video menu-icon"></i>
                  <span class="menu-title">Video Blog</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/blog-post') }}">
                  <i class="mdi mdi-blogger menu-icon"></i>
                  <span class="menu-title">Blog Post</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout.all') }}">
                  <i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
              </li>
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


<script>
// Add the following code if you want the name of the file appear on select
$("#customFile").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$("#customFile2").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>


  
</body>


</html>
