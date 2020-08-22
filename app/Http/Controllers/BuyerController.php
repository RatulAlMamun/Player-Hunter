<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BuyerRequest;
use App\Buyer;
use Session;
use Auth;

class BuyerController extends Controller
{
    public function hireplayer(Request $request)
    {
    	if(Auth::guest())
    	{
    		$hire_me_info = array(
    			'player_id' => $request->player_id,
    			'request_message' => $request->message,
    		);
    		Session::put('hire_me', $hire_me_info);
    		return redirect()->route('club.member.login');
    	}
    	else if(!empty(Auth::user()) && Auth::user()->role == User::Role['Buyer'])
    	{
    		$buyer = Buyer::where('user_id', Auth::id())->firstOrFail();
    		BuyerRequest::create([
    			'buyer_id' 			=> $buyer->id,
    			'player_id'			=> $request->player_id,
    			'request_message'	=> $request->message,
    			'status'			=> 1
    		]);
    		return redirect()->back()->with('success', 'Your Request Sent To Your Selected Player Successfully.');
    	}
    }
}
