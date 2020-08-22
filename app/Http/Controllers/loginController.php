<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Player;
use App\FootballPlayerCarrer;
use App\CricketPlayerCarrer;
use App\Buyer;
use App\User;
use App\BuyerRequest;
use Session;

class loginController extends Controller
{
    public function mregisterd()
    {
    	return view('theme.clubregistration.clubregistration');
    }

    public function memberregistration(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::Role['Buyer'],
        ]);
        $data = array(
            'user_id'   => $user->id,
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'phone_no'  => $request->phone_no,
            'address'   => $request->address,
            'club'      => $request->club,
            'sports'    => $request->sports
        );
        $buyer = Buyer::create($data);
        if(Session::has('hire_me'))
        {
            $hire_me_info = Session::get('hire_me');
            BuyerRequest::create([
                'buyer_id'          => $buyer->id,
                'player_id'         => $hire_me_info['player_id'],
                'request_message'   => $hire_me_info['request_message'],
                'status'            => 1
            ]);
            Session::forget('hire_me');
        }
        return redirect('/member-login')->with("doaddplayerregistration", "Your Registration Completed Succesfully.");
    }

    public function mlogin()
    {
    	return view('theme.clubregistration.clublogin');
    }

    public function pregistratio()
    {
    	return view('theme.playerregistration.playerregistration');
    }

    public function doplayerregistration(Request $request)
    {   
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::Role['Player'],
        ]);
        $image = $request->player_image;
        $new_name = rand().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $new_name);
        $data = array(
            'user_id'       => $user->id,
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
            'avg_rating'    => 0,
            'player_image'  => $new_name
        );
        Player::create($data);
        return redirect('/')->with("doaddplayerregistration", "Your Registration Completed Succesfully.");
    }

    public function plogin()
    {
    	return view('theme.playerregistration.playerlogin');
    }
}
