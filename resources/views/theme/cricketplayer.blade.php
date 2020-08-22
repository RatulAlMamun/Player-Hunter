
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
                  <li class="active">Cricket Player</li>
               </ul>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               @if(!empty($players))
                  @foreach($players as $player)
                     <div class="col-md-3 column">
                        <div class="card">
                           <img class="img-responsive" src="{{asset('public/uploads/'.$player->player_image) }}" alt="John" style="width:100%">
                           <div class="">
                              <h4>{{ $player->name }}</h4>
                              <p class="title">{{ $player->position }}</p>
                              <h4>{{ $player->avg_rating }}%</h4>
                              <p>
                              <div class="center"><button class="button"><a href="{{route ('cricketplayer.profile', ['id' => $player->id]) }}">Details</a></button></div>
                              </p>
                           </div>
                        </div>
                     </div>
                  @endforeach
               @endif
            </div>
         </div>
      </section>
     @endsection