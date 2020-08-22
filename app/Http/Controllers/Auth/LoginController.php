<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\BuyerRequest;
use App\User;
use App\Buyer;
use App\Player;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    public function showLoginForm()
    {
        return redirect('/');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function Adminlogin()
    {
        return view('theme.playerregistration.adminlogin');
    }

    public function login(Request $request)
    {
        $credintials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credintials))
        {
            if(Auth::user()->role == User::Role['Admin'])
            {
                return redirect()->route('admin.dashboard');
            }
            else if(Auth::user()->role == User::Role['Player'])
            {
            
                return redirect()->route('player.dashboard');
            }
            else if(Auth::user()->role == User::Role['Buyer'])
            {
                if(Session::has('hire_me'))
                {
                    $hire_me_info = Session::get('hire_me');
                    $buyer = Buyer::where('user_id', Auth::id())->firstOrFail();
                    BuyerRequest::create([
                        'buyer_id'          => $buyer->id,
                        'player_id'         => $hire_me_info['player_id'],
                        'request_message'   => $hire_me_info['request_message'],
                        'status'            => 1
                    ]);
                    $player = Player::find($hire_me_info['player_id']);
                    Session::forget('hire_me');
                    if($player->game_type == 'Football')
                    {
                        return redirect('/footballplayer-profile/'.$player->id)->with('success', 'Your Request Sent To Your Selected Player Successfully.');
                    }
                    else
                    {
                        return redirect('/cricketplayer-profile/'.$player->id)->with('success', 'Your Request Sent To Your Selected Player Successfully.');
                    }
                }
                return redirect()->route('home.page');
            }
            else
            {
                return redirect()->route('home.page');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Your login attempt is unsuccesfull');
        }
    }


    public function logout()
    {
        if(Auth::guest()){
            return redirect()->route('home.page');
        }
        $role = Auth::user()->role;
        session()->flush();
        if($role == User::Role['Admin'])
        {
            return redirect()->route('admin.page');
        }
        else if($role == User::Role['Player'])
        {
            return redirect()->route('player.login');
        }
        else if($role == User::Role['Buyer'])
        {
            return redirect()->route('club.member.login');
        }
        else
        {
            return redirect()->route('home.page');
        }
    }
}
