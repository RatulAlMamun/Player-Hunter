<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcomenk');
// });


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/member-registratio', 'loginController@mregisterd')->name('club.member.register');
Route::post('/domemberregistration', 'loginController@memberregistration')->name('memberregsitration.submit');
Route::get('/member-login', 'loginController@mlogin')->name('club.member.login');

Route::get('/player-registratio', 'loginController@pregistratio')->name('player.register');

Route::post('/doplayerregistration', 'loginController@doplayerregistration')->name('doplayerregistration.submit');

Route::get('/player-login', 'loginController@plogin')->name('player.login');






Route::get('/', 'profileController@homepage')->name('home.page');

Route::get('/about', 'profileController@Profileabout')->name('about.page');

Route::get('/news', 'profileController@Profilenews')->name('news.page');

Route::get('/blog', 'profileController@Profileblog')->name('blog.page');

Route::get('/contact', 'profileController@Profilecontact')->name('contact.page');

Route::get('/playerlist/football', 'profileController@footballplayerlist')->name('footballplayerlist');

Route::get('/playerlist/cricket', 'profileController@cricketplayerlist')->name('cricketplayerlist');

Route::get('/football-player/{position}', 'profileController@footballplayer')->name('football.page');

Route::get('/cricket-player/{position}', 'profileController@cricketplayer')->name('cricket.page');

Route::get('/footballplayer-profile/{id}', 'profileController@footballplayerprofile')->name('player.profile');

Route::get('/cricketplayer-profile/{id}', 'profileController@cricketplayerprofile')->name('cricketplayer.profile');

Route::get('/player-star', 'profileController@playerstars')->name('player.stars');

Route::get('/cricketplayer-star', 'profileController@cricketplayerstars')->name('cricketplayer.stars');

Route::post('/sendcontact', 'profileController@sendcontact')->name('contact.submit');

Route::post('/search', 'profileController@search')->name('search.submit');

Route::get('/search/rating1/{position}/{game_type}', 'profileController@searchrating1')->name('rating.one');

Route::get('/search/rating2/{position}/{game_type}', 'profileController@searchrating2')->name('rating.two');

Route::get('/search/rating3/{position}/{game_type}', 'profileController@searchrating3')->name('rating.three');

Route::get('/search/rating4/{position}/{game_type}', 'profileController@searchrating4')->name('rating.four');

Route::get('/search/rating5/{position}/{game_type}', 'profileController@searchrating5')->name('rating.five');






/*==========================================================================
							ADMIN DASHBOARD ROUTING
=============================================================================*/
Route::get('/admin', 'Auth\LoginController@Adminlogin')->name('admin.page');

Route::get('/admin-dashboard', 'AdminController@Admindashboard')->name('admin.dashboard');

Route::get('admin-edit-profile', 'AdminController@editprofile');

Route::post('admineditprofileprocess', 'AdminController@doeditprofile')->name('editadmin');

Route::get('/football_player_list', 'AdminController@footballplayerlist');

Route::get('/football_player_list/forward', 'AdminController@forwardfootballplayerlist');

Route::get('/football_player_list/midfilder', 'AdminController@midfilderfootballplayerlist');

Route::get('/football_player_list/defender', 'AdminController@defenderfootballplayerlist');

Route::get('/football_player_list/goalkeeper', 'AdminController@goalkeeperfootballplayerlist');


Route::get('/cricket_player_list', 'AdminController@cricketplayerlist');

Route::get('/cricket_player_list/batsman', 'AdminController@batsmancricketplayerlist');

Route::get('/cricket_player_list/bowler', 'AdminController@bowlercricketplayerlist');

Route::get('/cricket_player_list/allrounder', 'AdminController@allroundercricketplayerlist');

Route::get('/cricket_player_list/wicketkeeper', 'AdminController@wicketkeepercricketplayerlist');

Route::get('/removeplayer/{id}/{game_type}', 'AdminController@removeplayer');

Route::post('/addfootballcareer', 'AdminController@addfootballcareer')->name('addfootballcareer.submit');

Route::post('/addcricketcareer', 'AdminController@addcricketcareer')->name('addcricketcareer.submit');

Route::get('/football_player_career_list', 'AdminController@footballplayercareerlist');

Route::get('/cricket_player_career_list', 'AdminController@cricketplayercareerlist');

Route::post('/editfootballcareer', 'AdminController@editfootballcareer')->name('editfootballcareer.submit');

Route::post('/editcricketcareer', 'AdminController@editcricketcareer')->name('editcricketcareer.submit');

Route::get('/removfootballcareer/{id}', 'AdminController@removfootballcareer');

Route::get('/removcricketcareer/{id}', 'AdminController@removcricketcareer');

Route::get('/admin-registration', 'AdminController@adminregistration')->name('admin.registration');

Route::post('/admin-registration-process', 'AdminController@doadminregistration')->name('admin.registration.submit');

Route::get('/buyerlist', 'AdminController@buyerlist')->name('buyerlist');

Route::get('/buyerlist/{id}', 'AdminController@removebuyer')->name('buyer.delete');

Route::get('/club-dashboard', 'AdminController@Clubdashboard')->name('club.dashboard');

Route::get('/messages', 'AdminController@messages')->name('messages');

Route::post('/messages/sendmail', 'AdminController@sendmail')->name('messages.send');

Route::get('/deletemsg/{id}', 'AdminController@deletemsg')->name('deletemsg');

Route::get('/report', 'AdminController@report')->name('report');



/*==========================================================================
							PLAYER DASHBOARD ROUTING
=============================================================================*/
Route::get('/player-dashboard', 'PlayerController@playerdashboard')->name('player.dashboard');

Route::get('/player-edit-profile', 'PlayerController@playereditprofile')->name('player.edit');

Route::post('/editplayer', 'PlayerController@editplayer')->name('editplayer.submit');

Route::get('/player-videos', 'PlayerController@videoblog')->name('playervideos');

Route::post('/add-video', 'PlayerController@addvideo')->name('addvideo.submit');

Route::get('/delete-video/{id}/{player_id}', 'PlayerController@deletevideo')->name('rplayervideo');

Route::get('/blog-post', 'PlayerController@blogview');

Route::post('/create-post', 'PlayerController@createpost')->name('createpost.submit');

Route::post('/edit-post', 'PlayerController@editpost')->name('editpost.submit');

Route::get('/delete-post/{id}', 'PlayerController@deletepost')->name('postdelete');

Route::get('/buyer-request', 'PlayerController@buyerrequest')->name('buyer.request.page');

Route::get('/request-delete/{id}', 'PlayerController@requestdelete')->name('delete.request');

Route::post('/sendmail', 'PlayerController@sendmail');

Route::post('/sendreport', 'PlayerController@sendreport');



/*==========================================================================
							BUYER DASHBOARD ROUTING
=============================================================================*/
Route::post('hire-player', 'BuyerController@hireplayer')->name('hireme.submit');




Route::get('/logout-all', 'Auth\LoginController@logout')->name('logout.all');
Auth::routes();

