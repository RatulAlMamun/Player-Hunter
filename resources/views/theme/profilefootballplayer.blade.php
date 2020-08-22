@extends('layouts.nklayouts')
@section('content')

         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         @if(session('success'))
          <div class="row bg-success">
            <div class="col-12">
              <h1>{{ session('success') }}</h1>
            </div>
          </div>
         @endif
         <div class="inner-information-text">
            <div class="container">
               <h3>{{ $players->name }}</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Player</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team player">
         <div class="row">
            <div class="container">
               <div class="col-md-2">
                     <div class="feature-img">
                        <img src="{{asset('public/uploads/'.$players->player_image) }}" alt="#" width="200"/>
                     </div>
               </div> 
               <div class="col-md-4">
                  <div class="playerDetails">
                     <div class="number t-colour">{{ $players->id }}</div>
                      <h1>
                        <div class="name t-colour">{{ $players->name }}</div>
                      </h1>
                  </div>
               </div> 
               <div class="col-md-6">
                  <div class="history">
                     <table class="table table-bordered">
                       <thead>
                         <tr>
                           <th>Appearances <br> {{ $appearances }}</th>
                           <th>Goals <br> {{ $goals }}</th>
                           <th>Wins <br> {{ $wins }}</th>
                           <th>Losses <br> {{ $losses }}</th>
                         </tr>
                       </thead>
                     </table>
                  </div>
               </div>
            </div> 
         </div>
      </section>
       <section id="contant" class="contant main-heading team">
         <div class="row">
               <div class="container">

                <div class="col-md-3">               
                  <div class="blog-sidebar">
                     <div class="carrer">
                     <table class="table">
                       <tbody>
                         <tr>
                           <td>Club:</td>
                           <th>{{ $players->club }}</th>
                         </tr>
                         <tr>
                           <td>Position:</td>
                           <th>{{ $players->position }}</th>
                         </tr>
                          <tr>
                         
                       </tbody>
                     </table>
                  </div>
                  </div>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-01_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-02.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-03_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-04_003.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-05_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-06.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-07_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{asset('public/nk/theme/images/img-08.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </aside>
               </div>


               <div class="col-md-9">
                  <div class="history info">
                     <h3>Personal Details</h3>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nationality</th>
                        <th>Date of Birth</th>
                        <th>Height</th>
                        <th>Weight</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $players->nationality }}</td>
                        <td>{{ $players->date_of_birth }}</td>
                        <td>{{ $players->height }}</td>
                        <td>{{ $players->weight }}</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                  <br>
                  <br>
                  <div class="carrer">
                     <h3>Premier League Playing Career</h3>
                     <table class="table">
                       <thead class="thead-dark">
                         <tr>
                           <th scope="col">Date of Tourlament</th>
                           <th scope="col">Club</th>
                           <th scope="col">Appearances</th>
                           <th scope="col">Goals</th>
                           <th scope="col">Wins</th>
                           <th scope="col">Losses</th>
                           <th scope="col">Yellow Card</th>
                           <th scope="col">Red Card</th>
                           <th scope="col">Average Rating Marks</th>
                         </tr>
                       </thead>
                       <tbody>
                          @if(!empty($careers))
                            @foreach($careers as $career)
                             <tr>
                               <td>{{ $career->date_of_tournament }}</td>
                               <td>{{ $career->club }}</td>
                               <td>{{ $career->appearances }}</td>
                               <td>{{ $career->goals }}</td>
                               <td>{{ $career->wins }}</td>
                               <td>{{ $career->losses }}</td>
                               <td>{{ $career->yellow }}</td>
                               <td>{{ $career->red }}</td>
                               <td>{{ $career->rating }}%</td>
                             </tr>
                            @endforeach
                          @endif
                       </tbody>
                     </table>
                  </div>
                  <div class="feature-post">
                     <div class="feature-cont">
                     <div class="full text-center">
                        <a class="btn btnk" href="#" data-toggle="modal" data-target="#hirememodal">Hire Me</a>

                      </div>
                  </div>
               </div>
              
            </div>
         </div>
      </section>


      <section class="player-video">
        <div class="container">
          <div class="row">
            <h4 class="comnt">My Playing Videos</h4>
            <br>
            <?php $count = 0; ?>
            @if(!empty($videos))
              @foreach($videos as $video)
                <?php $count++; ?>
                  <div class="col-sm-3 text-center" title="Play the video" style="cursor: pointer" onmouseover="this.style.opacity=0.5;" onmouseout="this.style.opacity=1;">
                    <img src="{{asset('public/uploads/'.$video->poster) }}" data-toggle="modal" data-target="#playvideo{{$video->id}}" style="width: 80%; height: 200px;">
                  </div>
                <?php 
                  if($count%4==0){
                    echo '</div><br><br><div class="row">';
                  } 
                ?>


                <!-- Video modal -->
                <div class="modal" id="playvideo{{$video->id}}" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">{{ $video->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <video controls style="max-width: 100%;height: auto;">
                          <source src="{{ asset('public/videos/'.$video->video) }}" type="video/mp4">
                          Your browser does not support the video tag.
                        </video> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              @endif
          </div>
          <br>
          <br>
        </div>
      </section>

      <!-- Hire Me Modal -->
      <div class="modal" id="hirememodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title display-2">Hire me Request</h1>
              
            </div>
            <form action="{{ route('hireme.submit') }}" method="POST">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                    <label for="title">Write your message request</label>
                    <textarea class="form-control" name="message" rows="5" required></textarea>
                </div>
              </div>
              <input type="hidden" name="player_id" value="{{ $players->id }}">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Request</button>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection

