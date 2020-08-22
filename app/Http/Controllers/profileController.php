<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\FootballPlayerCarrer;
use App\CricketPlayerCarrer;
use App\Playervideo;
use App\Post;
use App\Contact;

class profileController extends Controller
{
   	public function homepage()
    {
    	$crickters = Player::where('game_type', 'Cricket')->get();
    	$footballers = Player::where('game_type', 'Football')->get();
    	$posts = Post::orderBy('id', 'DESC')->limit(3)->get();
    	return view('theme.landing', ['crickters' => $crickters, 'footballers' => $footballers, 'posts' => $posts]);
    }

    public function Profileabout()
    {
    	return view('theme.about');
    }

    public function Profilecontact()
    {
    	return view('theme.contact');
    }

    public function sendcontact(Request $request)
    {
        $data = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'address'   => $request->address,
            'message'   => $request->message
        );
        Contact::create($data);
        return redirect()->route('contact.page')->with('contact', 'Your message send successfully');
    }

    public function Profilenews()
    {
    	return view('theme.news');
    }

    public function Profileblog()
    {
    	$posts = Post::orderBy('id', 'DESC')->paginate(5);
    	return view('theme.blog', ['posts' => $posts]);
    }

    public function footballplayerlist()
    {
    	$players = Player::orderBy('id', 'DESC')->where('game_type', 'Football')->get();
    	return view('theme.footballplayer', ['players' => $players]);
    }

    public function cricketplayerlist()
    {
        $players = Player::orderBy('id', 'DESC')->where('game_type', 'Cricket')->get();
        return view('theme.cricketplayer', ['players' => $players]);
    }

    public function footballplayer($position)
    {
        $players = Player::orderBy('id', 'DESC')->where('position', $position)->get();
        return view('theme.footballplayer', ['players' => $players]);
    }

    public function cricketplayer($position)
    {
    	$players = Player::orderBy('id', 'DESC')->where('position', $position)->get();
    	return view('theme.cricketplayer', ['players' => $players]);
    }


    public function footballplayerprofile($id)
    {
    	$players = Player::find($id);
    	$careers = FootballPlayerCarrer::where('player_id', $id)->get();
    	$videos = Playervideo::where('player_id', $id)->get();
    	$appearances = 0; 
    	$goals = 0;
    	$wins = 0;
    	$losses = 0; 
    	foreach($careers as $career)
    	{
    		$appearances += $career->appearances;
    		$goals += $career->goals;
    		$wins += $career->wins;
    		$losses += $career->losses;
    	}

    	return view('theme.profilefootballplayer', [
    		'players' 		=> $players, 
    		'careers' 		=> $careers,
    		'appearances' 	=> $appearances,
    		'goals'			=> $goals,
    		'wins'			=> $wins,
    		'losses'		=> $losses,
    		'videos'		=> $videos
    	]);
    }


    public function cricketplayerprofile ($id)
    {
    	$players = Player::find($id);
    	$careers = CricketPlayerCarrer::where('player_id', $id)->get();
        $videos = Playervideo::where('player_id', $id)->get();
    	$appearances 	= 0; 
    	$runs 			= 0;
    	$wickets 		= 0;
    	$catch_misses 	= 0; 
    	foreach($careers as $career)
    	{
    		$appearances	+= $career->appearances;
    		$runs 			+= $career->runs;
    		$wickets 		+= $career->wickets;
    		$catch_misses 	+= $career->catch_misses;
    	}
    	return view('theme.profilecricketplayer', [
    		'players' 		=> $players, 
    		'careers' 		=> $careers,
    		'appearances' 	=> $appearances,
    		'runs'			=> $runs,
    		'wickets'		=> $wickets,
    		'catch_misses'	=> $catch_misses,
            'videos'        => $videos
    	]);
    }

    public function playerstars()
    {
    	$players = Player::where('game_type', 'Football')->get();
    	return view('theme.star', ['players' => $players]);
    }


    public function cricketplayerstars()
    {
    	$players = Player::where('game_type', 'Cricket')->get();
    	return view('theme.cricketstat', ['players' => $players]);
    }


    public function search(Request $request)
    {
        $position = $request->position;
        switch ($position) {
            case 'Forward':
            case 'Midfielder':
            case 'Defender':
            case 'Goalkeeper':
                $players = Player::where(['position' => $position, 'game_type' => 'Football'])->get();
                $game_type = 'Football';
                break;
            case 'Batsman':
            case 'Bowler':
            case 'Allrounder':
            case 'Wicketkeeper':
                $players = Player::where(['position' => $position, 'game_type' => 'Cricket'])->get();
                $game_type = 'Cricket';
                break;
            default:
                $players = "";
                $game_type = "N/A";
        }
        return view('theme.searchresult', ['players' => $players, 'game_type' => $game_type, 'position' => $position]);
    }


    public function searchrating1($position, $game_type)
    {
        $players = Player::where('position' , $position)->where('game_type' , $game_type)->where('avg_rating', '>=', 0)->where('avg_rating', '<=', 20)->get();
        return view('theme.searchresult', ['players' => $players, 'game_type' => $game_type, 'position' => $position]);
    } 


    public function searchrating2($position, $game_type)
    {
        $players = Player::where('position' , $position)->where('game_type' , $game_type)->where('avg_rating', '>=', 21)->where('avg_rating', '<=', 40)->get();
        return view('theme.searchresult', ['players' => $players, 'game_type' => $game_type, 'position' => $position]);
    }


    public function searchrating3($position, $game_type)
    {
        $players = Player::where('position' , $position)->where('game_type' , $game_type)->where('avg_rating', '>=', 41)->where('avg_rating', '<=', 60)->get();
        return view('theme.searchresult', ['players' => $players, 'game_type' => $game_type, 'position' => $position]);
    }


    public function searchrating4($position, $game_type)
    {
        $players = Player::where('position' , $position)->where('game_type' , $game_type)->where('avg_rating', '>=', 61)->where('avg_rating', '<=', 80)->get();
        return view('theme.searchresult', ['players' => $players, 'game_type' => $game_type, 'position' => $position]);
    }


    public function searchrating5($position, $game_type)
    {
        $players = Player::where('position' , $position)->where('game_type' , $game_type)->where('avg_rating', '>=', 81)->where('avg_rating', '<=', 100)->get();
        return view('theme.searchresult', ['players' => $players, 'game_type' => $game_type, 'position' => $position]);
    }
}

