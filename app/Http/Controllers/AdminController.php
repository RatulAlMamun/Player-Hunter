<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendEmail;
use App\Player;
use App\FootballPlayerCarrer;
use App\CricketPlayerCarrer;
use App\Playervideo;
use App\Buyer;
use App\Post;
use App\User;
use App\Contact;
use App\Report;
use Auth;
use Mail;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('admin.auth');
    }
    

    public function Admindashboard()
    {
        $player = count(Player::all());
        $post = count(Post::all());
        $buyer = count(Buyer::all());
        $admin = User::where('id', Auth::id())->firstOrFail();
    	return view('admin.dashboard.dashboard', [
            'admin'     => $admin,
            'player'    => $player,
            'post'      => $post,
            'buyer'     => $buyer
        ]);
    }

    public function editprofile()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        return view('admin.dashboard.editprofile', ['admin' => $admin]);
    }

    public function doeditprofile(Request $request)
    {
        $id = $request->id;
        $data = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        );
        User::where('id', $id)->update($data);
        return redirect('/admin-dashboard')->with('editpro', 'Your profile is updated Successfully');
    }

    public function footballplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('game_type', 'Football')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

    public function forwardfootballplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Forward')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

    public function midfilderfootballplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Midfielder')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

    public function defenderfootballplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Defender')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

    public function goalkeeperfootballplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Goalkeeper')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }


    public function removeplayer ($id, $game_type)
    {
        $player = Player::find($id);
        $position = $player->position;
        unlink(public_path('uploads').'\\'.$player->player_image);
        Player::where('id', $id)->delete();

        if($game_type == 'Football')
        { 
            FootballPlayerCarrer::where('player_id', $id)->delete();
            return redirect('/football_player_list/'.strtolower($position))->with("rplayer", "Player is successfully Removed");
        }
        else 
        {
            CricketPlayerCarrer::where('player_id', $id)->delete();
            return redirect('/cricket_player_list/'.strtolower($position))->with("rplayer", "Player is successfully Removed");
        }
    }

    public function addfootballcareer (Request $request) 
    {
        $player_id = $request->player_id;
        $rating1 = $request->rating1;
        $rating2 = $request->rating2;
        $rating3 = $request->rating3;

        $avg_rating = round(($rating1 + $rating2 + $rating3) / 3);
        $data = array(
            'player_id'             => $request->player_id,
            'date_of_tournament'    => $request->date_of_tournament,
            'club'                  => $request->club,
            'appearances'           => $request->appearances,
            'goals'                 => $request->goals,
            'wins'                  => $request->wins,
            'losses'                => $request->losses,
            'yellow'                => $request->yellow,
            'red'                   => $request->red,
            'rating1'               => $request->rating1,
            'rating2'               => $request->rating2,
            'rating3'               => $request->rating3,
            'rating'                => $avg_rating
        );
        FootballPlayerCarrer::create($data);
        $rating = FootballPlayerCarrer::select('rating')->where('player_id', $player_id)->get();
        $sum = 0;
        foreach($rating as $r)
        {
            $sum += $r->rating;
        }
        $avg_rating = round($sum/count($rating));
        Player::where('id', $player_id)->update(array('avg_rating' => $avg_rating));
        return redirect('/football_player_list')->with('doaddcareer', 'Career Added Succesfully');
    }

    public function footballplayercareerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = FootballPlayerCarrer::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.footballplayercareerlist', ['admin' => $admin, 'players' => $players]);
    }

    public function editfootballcareer (Request $request)
    {
        $id = $request->id;
        $player_id = $request->player_id;
        $rating1 = $request->rating1;
        $rating2 = $request->rating2;
        $rating3 = $request->rating3;

        $avg_rating = round(($rating1 + $rating2 + $rating3) / 3);
        $data = array(
            'player_id'             => $request->player_id,
            'date_of_tournament'    => $request->date_of_tournament,
            'club'                  => $request->club,
            'appearances'           => $request->appearances,
            'goals'                 => $request->goals,
            'wins'                  => $request->wins,
            'losses'                => $request->losses,
            'yellow'                => $request->yellow,
            'red'                   => $request->red,
            'rating1'               => $request->rating1,
            'rating2'               => $request->rating2,
            'rating3'               => $request->rating3,
            'rating'                => $avg_rating
        );
        FootballPlayerCarrer::where('id', $id)->update($data);
        $rating = FootballPlayerCarrer::select('rating')->where('player_id', $player_id)->get();
        $sum = 0;
        foreach($rating as $r)
        {
            $sum += $r->rating;
        }
        $avg_rating = round($sum/count($rating));
        Player::where('id', $player_id)->update(array('avg_rating' => $avg_rating));
        return redirect('/football_player_career_list')->with("editcareer", "Career is Succesfully Updated.");
    }

    public function removfootballcareer($id)
    {
        $career = FootballPlayerCarrer::find($id);
        $player_id = $career->player_id;
        FootballPlayerCarrer::where('id', $id)->delete();
        $rating = FootballPlayerCarrer::select('rating')->where('player_id', $player_id)->get();
        $sum = 0;
        foreach($rating as $r)
        {
            $sum += $r->rating;
        }
        $avg_rating = round($sum/count($rating));
        Player::where('id', $player_id)->update(array('avg_rating' => $avg_rating));
        return redirect('/football_player_career_list')->with("removecareer", "Career is successfully Removed");
    }

    public function cricketplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('game_type', 'Cricket')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

public function batsmancricketplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Batsman')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

public function bowlercricketplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Bowler')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

public function allroundercricketplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Allrounder')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }

public function wicketkeepercricketplayerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = Player::where('position', 'Wicketkeeper')->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.playerlist', ['admin' => $admin, 'players' => $players]);
    }


    public function addcricketcareer (Request $request) 
    {
        $player_id = $request->player_id;
        $rating1 = $request->rating1;
        $rating2 = $request->rating2;
        $rating3 = $request->rating3;
        $avg_rating = round(($rating1 + $rating2 + $rating3)/3);
        $data = array(
            'player_id'             => $request->player_id,
            'date_of_tournament'    => $request->date_of_tournament,
            'club'                  => $request->club,
            'play_off'              => $request->play_off,
            'appearances'           => $request->appearances,
            'runs'                  => $request->runs,
            'wickets'               => $request->wickets,
            'catch_misses'          => $request->catch_misses,
            'rating1'               => $request->rating1,
            'rating2'               => $request->rating2,
            'rating3'               => $request->rating3,
            'rating'                => $avg_rating
        );
        CricketPlayerCarrer::create($data);
        $rating = CricketPlayerCarrer::select('rating')->where('player_id', $player_id)->get();
        $sum = 0;
        foreach($rating as $r)
        {
            $sum += $r->rating;
        }
        $avg_rating = round($sum/count($rating));
        Player::where('id', $player_id)->update(array('avg_rating' => $avg_rating));
        return redirect('/cricket_player_list')->with('doaddcareer', 'Career Added Succesfully');
    }


    public function cricketplayercareerlist ()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $players = CricketPlayerCarrer::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.cricketplayercareerlist', ['admin' => $admin, 'players' => $players]);
    }

    public function editcricketcareer (Request $request)
    {
        $id = $request->id;
        $player_id = $request->player_id;
        $rating1 = $request->rating1;
        $rating2 = $request->rating2;
        $rating3 = $request->rating3;
        $avg_rating = round(($rating1 + $rating2 + $rating3)/3);
        $data = array(
            'player_id'             => $request->player_id,
            'date_of_tournament'    => $request->date_of_tournament,
            'club'                  => $request->club,
            'play_off'              => $request->play_off,
            'runs'                  => $request->runs,
            'wickets'               => $request->wickets,
            'catch_misses'          => $request->catch_misses,
            'rating1'               => $request->rating1,
            'rating2'               => $request->rating2,
            'rating3'               => $request->rating3,
            'rating'                => $avg_rating
        );
        CricketPlayerCarrer::where('id', $id)->update($data);
        $rating = CricketPlayerCarrer::select('rating')->where('player_id', $player_id)->get();
        $sum = 0;
        foreach($rating as $r)
        {
            $sum += $r->rating;
        }
        $avg_rating = round($sum/count($rating));
        Player::where('id', $player_id)->update(array('avg_rating' => $avg_rating));
        return redirect('/cricket_player_career_list')->with("editcareer", "Career is Succesfully Updated.");
    }

    public function removcricketcareer($id)
    {
        $career = CricketPlayerCarrer::find($id);
        $player_id = $career->player_id;
        CricketPlayerCarrer::where('id', $id)->delete();
        $rating = CricketPlayerCarrer::select('rating')->where('player_id', $player_id)->get();
        $sum = 0;
        foreach($rating as $r)
        {
            $sum += $r->rating;
        }
        $avg_rating = round($sum/count($rating));
        Player::where('id', $player_id)->update(array('avg_rating' => $avg_rating));
        return redirect('/cricket_player_career_list')->with("removecareer", "Career is successfully Removed");
    }

    public function adminregistration()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        return view('admin.dashboard.adminregistration', ['admin' => $admin]);
    }

    public function doadminregistration(Request $request)
    {
        $data = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => User::Role['Admin']
        );
        User::create($data);
        return redirect('/admin-registration')->with('adminreg', 'New Admin Created Successfully');
    }

    public function buyerlist()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $buyers = Buyer::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.buyerlist', ['admin' => $admin, 'buyers' => $buyers]);
    }

    public function removebuyer($id)
    {
        Buyer::where('id', $id)->delete();
        return redirect('/buyerlist')->with("rbuyer", "Buyer is successfully Removed");
    }


    public function messages()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $contacts = Contact::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.messages', ['contacts' => $contacts, 'admin' => $admin]);
    }

    public function deletemsg($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->route('messages')->with('rmsg', 'Your messages deleted Successfully');
    }

    public function sendmail(Request $request)
    {
        $name           = $request->sender_name;
        $email          = $request->sender_mail;
        $subject        = "Player Hunter";
        $msg            = $request->message;
        $message        ="Hi! ".$name.".|We recived your message successfully. Thank you for being with us. Here is our reply:|".$msg;
        Mail::to($email)->send(new SendEmail($subject, $message));  
        return redirect()->route('messages')->with('mail', 'Message Sent Successfully');
    }

    public function report()
    {
        $admin = User::where('id', Auth::id())->firstOrFail();
        $reports = Report::orderBy('id', 'DESC')->get();
        return view('admin.dashboard.report', ['admin'=> $admin, 'reports'=>$reports]);
    }

    public function Clubdashboard()
    {
    	return view('admin.dashboard.clubmemberdashboard');
    }
}
