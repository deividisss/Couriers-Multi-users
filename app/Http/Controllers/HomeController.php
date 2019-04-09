<?php

namespace App\Http\Controllers;

use App\Transport;
use Illuminate\Http\Request;

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
         $transports = Transport::where('courier_id', auth()->id())->get(); //select * from transports where owner_id =4 ;
        return view('home', ['transports' => $transports]);
    }
}
