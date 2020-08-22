@extends('admin.dashboard.layouts.dashboardlayout')
@section('content')
          @if(session('editpro'))
            <div class="row bg-success p-3">
              <div class="col-12">
                <h2>{{ session('editpro') }}</h2>
              </div>
            </div>
          @endif
          <div class="row">
            <div class="jumbotron text-center my-5 p-5 w-100">
                <h1 class="display-1">Welcome To Admin Panel</h1>
                <h1 class="display-2 text-info">Hi! Admin</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-7">
                      <i class="display-1 mdi mdi-account text-warning"></i>
                    </div>
                    <div class="col-5">
                      <h1 class="display-2">{{ $player }}</h1>
                    </div>
                  </div>
                </div> 
                <div class="car-footer">
                  <h2 class="card-title px-3">Total Player</h2>
                </div> 
              </div>
            </div>
            <div class="col-sm-6 col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-7">
                      <i class="display-1 mdi mdi-human-greeting text-warning"></i>
                    </div>
                    <div class="col-5">
                      <h1 class="display-2">{{ $buyer }}</h1>
                    </div>
                  </div>
                </div> 
                <div class="car-footer">
                  <h2 class="card-title px-3">Total Buyer</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-7">
                      <i class="display-1 mdi mdi-blogger text-warning"></i>
                    </div>
                    <div class="col-5">
                      <h1 class="display-2">{{ $post }}</h1>
                    </div>
                  </div>
                </div> 
                <div class="car-footer">
                  <h2 class="card-title px-3">Total Post</h2>
                </div>
              </div>
            </div>
          </div>
 
        <!-- content-wrapper ends -->
        
 @endsection       