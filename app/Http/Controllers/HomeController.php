<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use app\user;
use Redirect;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Session::put('locale','en');
//        return view('home');
        if(Auth::User()->role == 0 ){
            Redirect::to('/employee/home')->send();
        }

    }
}
