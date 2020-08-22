@extends('layouts.nklayouts')
@section('content')

         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Blog</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Blog</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-9">
                  {{ $posts->links() }}
                  @if(!empty($posts))
                  @foreach($posts as $post)
                     <div class="feature-post small-blog">
                        <div class="col-md-5">
                           <div class="feature-img">
                              <img src="{{asset('public/uploads/'.$post->blog_image) }}" class="img-responsive" alt="#" />
                           </div>
                        </div>
                        <div class="col-md-7">
                           <div class="feature-cont">
                              <div class="post-info">
                                 <?php 
                                    $player = App\Player::find($post->player_id);
                                 ?>
                                 <img src="{{asset('public/uploads/'.$player->player_image) }}" alt="#" />
                                 <span>
                                    <h4>by {{ $player->name }}</h4>
                                    <h5>on  {{ $post->created_at->format('M-d-Y') }}</h5>
                                 </span>
                              </div>
                              <div class="post-heading">
                                 <h3>{{ $post->blog_title }}</h3>
                                 <p>{{ $post->blog_details }}</p>
                                 <div class="full">
                                    <a class="btn" data-toggle="modal" data-target="#post{{$post->id}}">Read More</a>
                                 </div>
                              </div>
                           </div>
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
                  {{ $posts->links() }}
               </div>
               <div class="col-md-3">
                  <div class="blog-sidebar">
                     <h4 class="heading">Popular News</h4>
                     <div class="category-menu">
                        <ul>
                           <li>
                              <span><img src="{{asset('public/nk/theme/images/profile-img2.png') }}" alt="#"></span>
                              <span>
                                 <p>Two touch penalties, imaginary cards</p>
                                 <p class="date">22 Feb, 2016</p>
                              </span>
                           </li>
                        </ul>
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
                  <aside id="sidebar" class="left-bar">
                     <div class="banner-sidebar">
                        <img class="img-responsive" src="{{asset('public/nk/theme/images/match-banner1.jpg') }}" alt="#">
                        <h3>Argentina vs Chile|Goals of the match | COPA </h3>
                     </div>
                  </aside>
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
                                 <td><img src="{{asset('public/nk/theme/images/img-01_004.png') }}" alt="">Liverpool</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><img src="{{asset('public/nk/theme/images/img-02_002.png') }}" alt="">Chelsea</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><img src="{{asset('public/nk/theme/images/img-03_003.png') }}" alt="">Norwich City</td>
                                 <td>20</td>
                                 <td>15</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><img src="{{asset('public/nk/theme/images/img-04_002.png') }}" alt="">West Brom</td>
                                 <td>60</td>
                                 <td>10</td>
                                 <td>60</td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><img src="{{asset('public/nk/theme/images/img-05.png') }}" alt="">sunderland</td>
                                 <td>30</td>
                                 <td>06</td>
                                 <td>30</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </section>


@endsection