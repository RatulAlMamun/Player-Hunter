<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountController extends Controller
{
     public function ProfileSetting()
	    {
	    	return view('allpages.AccountSetting');
	    }

	    public function Personalino()
	    {
	    	return view('allpages.AccountPersonalInfo');
	    }

	    public function ChangePass()
	    {
	    	return view('allpages.AccountChangePass');
	    }

	    public function HobbiesInter()
	    {
	    	return view('allpages.AccountHobbeis');
	    }

	    public function EducationEmployment()
	    {
	    	return view('allpages.AccountEducationEmplyee');
	    }
}
