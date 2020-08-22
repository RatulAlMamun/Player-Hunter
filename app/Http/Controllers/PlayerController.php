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
use App\BuyerRequest;
use App\Post;
use App\Report;
use Auth;
use Mail;

class PlayerController extends Controller
{
    public function __construct(){

        $this->middleware(['auth', 'player.auth']);
    }

    public function playerdashboard()
    {
        $player = Player::where('user_id', Auth::id())->firstOrFail();
    	return view('admin.dashboard.playerdashboard', ['player' => $player]);
    }


    public function playereditprofile()
    {
        $player = Player::where('user_id', Auth::id())->firstOrFail();
        return view('admin.dashboard.playereditprofile', ['player' => $player]);
    }

    public function editplayer(Request $request)
    {
        $image = $request->player_image;
        $id = $request->id;
        $oldimg = $request->oldimage;
        if(isset($image))
        {
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $new_name);
            $data = array(
                'name'          => $request->name,
                'email'         => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'height'        => $request->height,
                'weight'        => $request->weight,
                'nationality'   => $request->nationality,
                'club'          => $request->club,
                'position'      => $request->position,
                'game_type'     => $request->game_type,
                'password'      => Hash::make($request->password),
                'phone_no'      => $request->phone_no,
                'address'       => $request->address,
                'player_image'  => $new_name
            );
            Player::where('id', $id)->update($data);
            unlink(public_path('/uploads/'.$oldimg));
            return redirect('/player-dashboard')->with("playeredit", "Your Profile is Updated.");
        }
        else
        {
            $data = array(
                'name'          => $request->name,
                'email'         => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'height'        => $request->height,
                'weight'        => $request->weight,
                'nationality'   => $request->nationality,
                'club'          => $request->club,
                'position'      => $request->position,
                'game_type'     => $request->game_type,
                'password'      => Hash::make($request->password),
                'phone_no'      => $request->phone_no,
                'address'       => $request->address
            );
            Player::where('id', $id)->update($data);
            return redirect('/player-dashboard')->with("playeredit", "Your Profile is Updated.");
        }
    }


    public function videoblog()
    {
        $player = Player::where('user_id', Auth::id())->firstOrFail();
        $videos = Playervideo::where('player_id', $player->id)->get();
        return view('admin.dashboard.playervideoblog', ['player' => $player, 'videos' => $videos]);
    }


    public function addvideo(Request $request)
    {
        $id = $request->id;
        $video = $request->video;
        $new_name = rand().'.'.$video->getClientOriginalExtension();
        $video->move(public_path('videos'), $new_name);

        $poster = $request->poster;
        $poster_new_name = rand().'.'.$poster->getClientOriginalExtension();
        $poster->move(public_path('uploads'), $poster_new_name);
        $data = array(
            'player_id' => $request->id,
            'title'     => $request->title,
            'video'     => $new_name,
            'poster'    => $poster_new_name
        );
        Playervideo::create($data);
        return redirect('/player-videos')->with('videouploaded', 'Your video upload successfully.');
    }


    public function deletevideo($id, $player_id)
    {
        $video = Playervideo::find($id);
        $player_id = $video->player_id;
        Playervideo::where('id', $id)->delete();
        unlink(public_path('/videos/'.$video->video));
        return redirect('/player-videos')->with('removevideo', 'Your video Removed successfully');
    }


    public function blogview()
    {
        $player = Player::where('user_id', Auth::id())->firstOrFail();
        $posts = Post::where('player_id', $player->id)->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.blogview', ['player' => $player, 'posts' => $posts]);
    }


    public function createpost(Request $request)
    {
        $id = $request->player_id;
        $image = $request->blog_image;
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $new_name);
        $data = array(
            'player_id'     => $id,
            'blog_title'    => $request->blog_title,
            'blog_details'  => $request->blog_details,
            'blog_image'    => $new_name
        );
        Post::create($data);
        return redirect('/blog-post')->with('addpost', 'Your Post Save Successfully');
    }

    public function editpost(Request $request)
    {
        $post_id = $request->post_id;
        $player_id = $request->player_id;
        $image = $request->blog_image;
        $oldimg = $request->oldimage;
        if(isset($image))
        {
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $new_name);
            $data = array(
                'blog_title'    => $request->blog_title,
                'blog_details'  => $request->blog_details,
                'blog_image'    => $new_name
            );
            Post::where('id', $post_id)->update($data);
            unlink(public_path('uploads').'\\'.$oldimg);
            return redirect('/blog-post')->with("postedit", "Your Post is Updated.");
        }
        else
        {
            $data = array(
                'blog_title'    => $request->blog_title,
                'blog_details'  => $request->blog_details
            );
            Post::where('id', $post_id)->update($data);
            return redirect('/blog-post')->with("postedit", "Your Post is Updated.");
        }
    }


    public function deletepost($id)
    {
        $post = Post::find($id);
        $player_id = $post->player_id;
        unlink(public_path('uploads').'\\'.$post->blog_image);
        Post::where('id', $post->id)->delete();
        return redirect('/blog-post')->with("rpost", "Post is successfully Removed");
    }


    public function buyerrequest()
    {
        $player = Player::where('user_id', Auth::id())->firstOrFail();
        $buyerrequest = BuyerRequest::where('player_id', $player->id)->orderBy('id', 'DESC')->get();
        return view('admin.dashboard.buyerrequest', ['buyerrequest' => $buyerrequest, 'player' => $player]);
    }


    public function requestdelete($id)
    {
        BuyerRequest::where('id', $id)->delete();
        return redirect()->back()->with('deleter', 'Your Request Deleted Successfully');
    }


    public function sendmail(Request $request)
    {
        $player_name    = $request->player_name;
        $buyer_name     = $request->buyer_name;
        $email          = $request->buyer_mail;
        $subject        = "Player Hunter";
        $msg            = $request->message;
        $message        ="Hi! ".$buyer_name.".|Your request for hiring ".$player_name." has been sent and he ACCEPT your request. Here are the reply from ".$player_name.".|".$msg;
        Mail::to($email)->send(new SendEmail($subject, $message));  
        return redirect()->route('buyer.request.page')->with('mail', 'Message Sent to the Buyer Successfully');
    }


    public function sendreport(Request $request)
    {
        $data = array(
            'message'   => $request->message,
            'player_id' => $request->player_id,
            'buyer_id'  => $request->buyer_id
        );
        Report::create($data);
        return redirect()->route('buyer.request.page')->with('mail', 'Report Sent to the Admin Successfully');
    }
}
