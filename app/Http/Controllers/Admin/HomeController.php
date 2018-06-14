<?php

namespace App\Http\Controllers\Admin;

class HomeController extends AdminBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guard('admin')->user()) {
            return view('admin.pages.dashboard');
        }
        return view('admin.pages.home');
    }
}
