
<html lang="en">

<head>
  <title>Stars</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset ('public/nk/admin/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{asset ('public/nk/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset ('public/nk/admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset ('public/nk/admin/css/style.css') }}">
  <!-- endinject -->
</head>

<body class="sidebar-dark">
  <!-- partial -->
  <div class="container-scroller">
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{route ('home.page') }}">Player Hunter</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link count-indicator" href="{{route ('home.page') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link count-indicator" href="{{route ('about.page') }}">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              Football Player
            </a>
            <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="{{route ('football.page', ['position'=>'Forward']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Forward</span>
              </a>
              <a class="dropdown-item" href="{{route ('football.page', ['position'=>'Midfielder']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Midfielder</span>
              </a>
              <a class="dropdown-item" href="{{route ('football.page', ['position'=>'Defender']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Defender</span>
              </a>
              <a class="dropdown-item" href="{{route ('football.page', ['position'=>'Goalkeeper']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Goalkeeper</span>
              </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              Cricket Player
            </a>
            <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="{{route ('cricket.page', ['position'=>'Batsman']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Batsman</span>
              </a>
              <a class="dropdown-item" href="{{route ('cricket.page', ['position'=>'Bowler']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Bowler</span>
              </a>
              <a class="dropdown-item" href="{{route ('cricket.page', ['position'=>'Allrounder']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Allrounder</span>
              </a>
              <a class="dropdown-item" href="{{route ('cricket.page', ['position'=>'Wicketkeeper']) }}">
                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                <span class="notification-text">Wicketkeeper</span>
              </a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link count-indicator" href="{{route ('player.stars') }}">Stars</a></li>
          <li class="nav-item"><a class="nav-link count-indicator" href="{{route ('blog.page') }}">Blog</a></li>
          <li class="nav-item"><a class="nav-link count-indicator" href="{{route ('contact.page') }}">contact</a></li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
            <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <!--main pages start-->
            <!--main pages end-->
            <li class="nav-item">
              <a class="nav-link" href="{{route ('player.stars') }}">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Football Player Stars</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('cricketplayer.stars') }}">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title">Cricket Player Stars</span>
                <i class="mdi mdi-chevron-right menu-arrow"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <h1 class="page-title">Football Stats Centre</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Premier League Football Player Stats</h2>
              
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Player</th>
                          <th>Position</th>
                          <th>Club</th>
                          <th>Nationality</th>
                          <th>Rating</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(!empty($players))
                        @foreach($players as $player)
                          <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->position }}</td>
                            <td>{{ $player->club }}</td>
                            <td>{{ $player->nationality }}</td>
                            <td>{{ $player->avg_rating }}%</td>
                            <td>
                              <a href="{{route('player.profile', ['id' => $player->id])}}" class="btn btn-outline-primary">View</a>
                            </td>
                        </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset ('public/nk/admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset ('public/nk/admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{asset ('public/nk/admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{asset ('public/nk/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset ('public/nk/admin/node_modules/datatables.net/js/jquery.dataTables.js') }}"></script>
  <script src="{{asset ('public/nk/admin/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset ('public/nk/admin/js/off-canvas.js') }}"></script>
  <script src="{{asset ('public/nk/admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{asset ('public/nk/admin/js/misc.js') }}"></script>
  <script src="{{asset ('public/nk/admin/js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset ('public/nk/admin/js/data-table.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

