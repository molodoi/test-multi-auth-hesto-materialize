<?php

namespace App\Http\Controllers\Renter;

class DashboardController extends RenterBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('renter.guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('renter.pages.dashboard');
    }
}
