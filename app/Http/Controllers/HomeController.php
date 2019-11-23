<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
App\Receipt;

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
        $record  = Receipt::all()->where('is_active', 1)->where('done', 1)->count();
        $pending = Receipt::all()->where('is_active', 1)->where('done', 0)->count();
        $cancel  = Receipt::all()->where('is_active', 0)->where('done', 0)->count();
        return view('home', compact('record', 'pending', 'cancel'));
    }
}
