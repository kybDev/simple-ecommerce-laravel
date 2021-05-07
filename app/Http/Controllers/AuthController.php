<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{ 
    protected $request, $user;

    public function __construct(Request $request, User $user)
    {
        $this->request = $request;
        $this->user = $user;
    }

    public function index(){
        return view('login');
    }

    public function verify(){
        if(Auth::attempt($this->request->except('_token'))) return Redirect::route('home');

        return back()->withError('Invalid Credentials'); 
    }

    public function register(){

        $this->request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
        ]);

        $isSignup = User::create([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'address' => $this->request->address,
            'contact' => $this->request->contact,
            'password' => bcrypt($this->request->password),
            'account_type' => "customer"
        ]);

        Auth::loginUsingId($isSignup->id);
        return Redirect::route('home');

        return back()->withError('Something '); 
    }

    public function logout(){
        Auth::logout();

        return Redirect::route('login');
    }

    public function signup(){
        return view('signup'); 
    }

   
}
