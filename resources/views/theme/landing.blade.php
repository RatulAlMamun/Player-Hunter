@extends('layouts.nklayouts')
@section('content')
   @if(session('doaddplayerregistration'))
      <h1>{{ session('doaddplayerregistration') }}</h1>
   @endif
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <br>
                              <br>
                              <h3>Welcome to the <span class="color-yellow">Biggest Sports Network</span> in the World</h3>
                              <p>
                                 PLAYER HUNTER
                                 SPORTS NETWORK
                                 Welcome to the Biggest Sports Network in the World
                                 We are the best and biggest Sports network with 5 billion active users all around the world. Share you thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                              </p>
                              <button class="btn btn-primary btn-lg">Register Now!</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Second slide -->
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <br>
                              <br>
                              <h3>Welcome to the <span class="color-yellow">Biggest Sports Network</span> in the World</h3>
                              <p>
                                 We are the best and biggest Sports network with 5 billion active users all around the world. Share you thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                              </p>
                              <button class="btn btn-primary btn-lg">Register Now!</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
                  <!-- Third slide -->
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <div class="carousel-caption">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <br>
                              <br>
                              <h3>Welcome to the <span class="color-yellow">Biggest Sports Network</span> in the World</h3>
                              <p>
                                 PLAYER HUNTER
                                 SPORTS NETWORK
                                 Welcome to the Biggest Sports Network in the World
                                 We are the best and biggest Sports network with 5 billion active users all around the world. Share you thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                              </p>
                              <button class="btn btn-primary btn-lg">Register Now!</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.item -->
               </div>
               <!-- /.carousel-inner -->
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
            <!-- /.carousel -->
            <div class="news">
               <div class="container">
                  <div class="heading-slider">
                     <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> Top Headlines :</p>
                     <!--made by vipul mirajkar thevipulm.appspot.com-->
                     <h1>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "Contrary to popular belief, Lorem Ipsum is not simply random text.", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."]'>
                     <span class="wrap"></span>
                     </a>
                     </h1>	   
                     <span class="wrap"></span>
                  </div>
               </div>
         </div>
      </section>
      <div class="matchs-info">
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="matchs-vs">
                     <div class="vs-team">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-03.png') }}" alt="">
                                 <span>Footbal Team</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-04.png') }}" alt="">
                                 <span>Super Team Club</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
               <div class="full">
                  <div class="right-match-time">
                     <h2>Next Match</h2>
                     <ul id="countdown-1" class="countdown">
                        <li><span class="days">10 </span>Day </li>
                        <li><span class="hours">5 </span>Hours </li>
                        <li><span class="minutes">25 </span>Minutes </li>
                        <li><span class="seconds">10 </span>Seconds </li>
                     </ul>
                     <span>12/02/2017 /19:00pm</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-4 col-xs-12">
                  <aside id="sidebar" class="left-bar">
                     <div class="banner-sidebar">
                        <img class="img-responsive" src="{{ asset('public/nk/theme/images/img-05.jpg') }}" alt="#" />
                        <h3>Lorem Ipsum is simply dummy text..</h3>
                     </div>
                  </aside>
                  <h4>Match Fixture</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-01_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-02.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-03_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-04_003.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-05_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-06.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-07_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-08.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-05_002.png') }}" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="{{ asset('public/nk/theme/images/img-06.png') }}" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </aside>
                  <h4>Points Table</h4>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <table class="table table-bordered table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Team</th>
                                 <th>P</th>
                                 <th>W</th>
                                 <th>L</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td><img src="{{ asset('public/nk/theme/images/img-01_004.png') }}" alt="">Liverpool</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><img src="{{ asset('public/nk/theme/images/img-02_002.png') }}" alt="">Chelsea</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><img src="{{ asset('public/nk/theme/images/img-03_003.png') }}" alt="">Norwich City</td>
                                 <td>20</td>
                                 <td>15</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><img src="{{ asset('public/nk/theme/images/img-04_002.png') }}" alt="">West Brom</td>
                                 <td>60</td>
                                 <td>10</td>
                                 <td>60</td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><img src="{{ asset('public/nk/theme/images/img-05.png') }}" alt="">sunderland</td>
                                 <td>30</td>
                                 <td>06</td>
                                 <td>30</td>
                              </tr>
                              <tr>
                                 <td>1</td>
                                 <td><img src="{{ asset('public/nk/theme/images/img-01_004.png') }}" alt="">Liverpool</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </aside>
               </div>
               <div class="col-lg-8 col-sm-8 col-xs-12">
                  <div class="news-post-holder">
                     @if(!empty($posts))
                     @foreach($posts as $post)
                     <?php 
                        $player = App\Player::find($post->player_id);
                     ?>
                     <div class="news-post-widget">
                        <img class="img-responsive" src="{{ asset('public/uploads/'.$post->blog_image) }}" alt="">
                        <div class="news-post-detail">
                           <span class="date">{{ $post->created_at->format('d F Y') }}</span>
                           <h2><a style="cursor: pointer;" data-toggle="modal" data-target="#post{{$post->id}}">{{ $post->blog_title }}</a></h2>
                           <p>{{ $post->blog_details }}</p>
                        </div>
                     </div>


                     <!-- Read More Modal -->
                     <div class="modal fade" id="post{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                              <div style="width: 100%;">
                                 <div style="width: 30%;float: left;">
                                    <img src="{{asset('public/uploads/'.$player->player_image) }}" alt="#" width="50" />
                                 </div>
                                 <div style="width: 60%;float: left;text-align: left;">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $player->name }}</h5>
                                    <small class="text-muted">on {{ $post->created_at->format('M-d-Y') }}</small>
                                 </div>
                                 <div style="width: 10%;float: left;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-body">
                             <div class="row">
                                <div style="width: 39%;float: left;margin: 2px;">
                                   <img src="{{asset('public/uploads/'.$post->blog_image) }}" class="img-responsive" alt="#" />
                                </div>
                                <div style="width: 59%;float: left;margin: 2px;">
                                    <h3>{{ $post->blog_title }}</h3>
                                    <p>{{ $post->blog_details }}</p>
                                </div>
                             </div>
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                           </div>
                         </div>
                       </div>
                     </div>
                     @endforeach
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </section>

      <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2>Our Top Ranking Cricket Players</h2>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
               </div>
            </div>
         </div>
            
         <div id="team-slider">
            <section class="video_section_main theme-padding middle-bg vedio">
               <div class="container">
                  <div class="carousel slide multi-item-carousel" id="theCarousel1">
                     <div class="carousel-inner">

                        @if(!empty($crickters))
                        <?php $x =0; ?>
                        @foreach($crickters as $crickter)
                        <?php $x++; ?>
                           <div class="item <?php echo ($x==1) ? 'active' : ''?>">
                              <div class="col-md-4">
                                 <div class="team-column style-2">
                                    <img src="{{ asset('public/uploads/'.$crickter->player_image) }}" width="250" alt="">
                                    <div class="player-name">
                                       <div class="desination-2">{{ $crickter->position }}</div>
                                       <h5>{{ $crickter->name }}</h5>
                                       <span class="player-number">{{ $crickter->avg_rating }}%</span>
                                    </div>
                                    <div class="overlay">
                                       <div class="team-detail-hover position-center-x">
                                          <p>Lacus vulputate torquent mollis venenatis quisque suspendisse fermentum primis,</p>
                                          <ul class="social-icons style-4 style-5 text-center">
                                             <li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
                                             <li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
                                             <li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
                                          </ul>
                                          <a class="btn blue-btn" href="{{route ('cricketplayer.profile', ['id' => $crickter->id]) }}" tabindex="0">View Detail</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                        @endif
                     </div>
                     <a class="left carousel-control nkcl" href="#theCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                     <a class="right carousel-control nkcc" href="#theCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                  </div>
               </div>
            </section>
         </div>
      </div>



      <div class="team-holder theme-padding">
         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2>Our Top Ranking Football Players</h2>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam</p>
               </div>
            </div>
         </div>
            
            <div id="team-slider">
               <section class="video_section_main theme-padding middle-bg vedio">
               <div class="container">
                  <div class="carousel slide multi-item-carousel" id="theCarousel">
                    <div class="carousel-inner">

               @if(!empty($footballers))
                        <?php $x =0; ?>
                        @foreach($footballers as $footballer)
                        <?php $x++; ?>
                           <div class="item <?php echo ($x==1) ? 'active' : ''?>">
                              <div class="col-md-4">
                                 <div class="team-column style-2">
                                    <img src="{{ asset('public/uploads/'.$footballer->player_image) }}" width="250" alt="">
                                    <div class="player-name">
                                       <div class="desination-2">{{ $footballer->position }}</div>
                                       <h5>{{ $footballer->name }}</h5>
                                       <span class="player-number">{{ $footballer->avg_rating }}%</span>
                                    </div>
                                    <div class="overlay">
                                       <div class="team-detail-hover position-center-x">
                                          <p>Lacus vulputate torquent mollis venenatis quisque suspendisse fermentum primis,</p>
                                          <ul class="social-icons style-4 style-5 text-center">
                                             <li><a class="facebook" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
                                             <li><a class="twitter" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
                                             <li><a class="youtube" href="#" tabindex="0"><i class="fa fa-youtube-play"></i></a></li>
                                          </ul>
                                          <a class="btn blue-btn" href="{{route ('player.profile', ['id' => $footballer->id]) }}" tabindex="0">View Detail</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endforeach
                        @endif
               
               
                <!--  Example item end -->
                 </div>
                       <a class="left carousel-control nkcl" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                       <a class="right carousel-control nkcc" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
               </div>

               </div>
               </section>
            </div>
         
         </div>


  @endsection