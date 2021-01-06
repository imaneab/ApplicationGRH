<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;

class MainController extends Controller
{
    function index(){
        return view('log');
    }

    function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data)){
            return redirect('menu');

        }
        else{
            return back()->with('error', 'Les informations sont incorrecte!');

        }
    }

    function menu(){
        return view('menu');
    }

    function logout(){
        Auth::logout();
        return redirect('main');
    }
}
