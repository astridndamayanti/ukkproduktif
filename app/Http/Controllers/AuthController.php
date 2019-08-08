<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class AuthController extends Controller
{
  public function login(){
   	return view('login');
 //
}

public function postlogin(Request $request){
	if(Auth::attempt($request->only('name','password','role'))){
		return redirect('home');
	}
	return redirect('login');

}

}
