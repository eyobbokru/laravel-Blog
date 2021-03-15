<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){

        $this->middleware(['guest']);
    }
 
    public function index(){

        
        return view ('auth.login');

    }

    public function store(Request $login)
    {
       
        $this-> validate($login, [
            
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        // sign the user in

        if(!auth()-> attempt($login->only('email','password'), $login->remember)){

            return back()-> with('status','Invalid login details');

        }

        return redirect() -> route('dashboard');

       
    }

}
