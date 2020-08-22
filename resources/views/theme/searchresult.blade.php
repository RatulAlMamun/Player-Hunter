@extends('layouts.nklayouts')
@section('content')

         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Our Team</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">{{ $game_type }} Player</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
            	@if(!empty($players))
                  <div class="col-md-3">
                     <ul>
                        <li style="width: 100%; background-color: #ccc; color:#000; padding: 8px 10px;border-bottom:3px solid #fff;cursor: pointer;" onmouseover="this.style.background='green'" onmouseout="this.style.background='#ccc'">
                           <a href="{{ route('rating.one', ['position' => $position, 'game_type' => $game_type]) }}">Rating 0% - 20%</a>
                        </li>
                        <li style="width: 100%; background-color: #ccc; color:#000; padding: 8px 10px;border-bottom:3px solid #fff;cursor: pointer;" onmouseover="this.style.background='green'" onmouseout="this.style.background='#ccc'">
                           <a href="{{ route('rating.two', ['position' => $position, 'game_type' => $game_type]) }}">Rating 21% - 40%</a>      
                        </li>
                        <li style="width: 100%; background-color: #ccc; color:#000; padding: 8px 10px;border-bottom:3px solid #fff;cursor: pointer;" onmouseover="this.style.background='green'" onmouseout="this.style.background='#ccc'">
                           <a href="{{ route('rating.three', ['position' => $position, 'game_type' => $game_type]) }}">Rating 41% - 60%</a>      
                        </li>
                        <li style="width: 100%; background-color: #ccc; color:#000; padding: 8px 10px;border-bottom:3px solid #fff;cursor: pointer;" onmouseover="this.style.background='green'" onmouseout="this.style.background='#ccc'">
                           <a href="{{ route('rating.four', ['position' => $position, 'game_type' => $game_type]) }}">Rating 61% - 80%</a>      
                        </li>
                        <li style="width: 100%; background-color: #ccc; color:#000; padding: 8px 10px;cursor: pointer;" onmouseover="this.style.background='green'" onmouseout="this.style.background='#ccc'">
                           <a href="{{ route('rating.five', ['position' => $position, 'game_type' => $game_type]) }}">Rating 81% - 100%</a>      
                        </li>
                     </ul>
                  </div>
               @endif
            	<div class="col-md-9">
            		<div class="row">
            			@if(!empty($players))
            			   @foreach($players as $player)
            			      <div class="col-md-4 column">
            			         <div class="card">
            			            <img class="img-responsive" src="{{asset('public/uploads/'.$player->player_image) }}" alt="John" style="width:100%">
            			            <div class="">
            			               <h4>{{ $player->name }}</h4>
            			               <p class="title">{{ $player->position }}</p>
            			               <h4>{{ $player->avg_rating }}%</h4>
            			               <p>
                                    @if($game_type == 'Football')
            			               <div class="center"><button class="button"><a href="{{route ('player.profile', ['id' => $player->id]) }}">Details</a></button></div>
                                    @else($game_type == 'Cricket')
                                    <div class="center"><button class="button"><a href="{{route ('cricketplayer.profile', ['id' => $player->id]) }}">Details</a></button></div>
                                    @endif
            			               </p>
            			            </div>
            			         </div>
            			      </div>
            			   @endforeach
                     @else
                     <h1>No Player found.</h1>
                     <h3>Please use the position name for search. <br>Format will be (e.g. <strong>Forward</strong>, <strong>Batsman</strong> etc.)</h3>
            			@endif	
            		</div>
            	</div>
            </div>
         </div>
      </section>
@endsection