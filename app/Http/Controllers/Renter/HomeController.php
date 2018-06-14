<?php

namespace App\Http\Controllers\Renter;

class HomeController extends RenterBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('renter.guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guard('renter')->user()) {
            return view('renter.pages.dashboard');
        }
        return view('renter.pages.home');
    }
}
