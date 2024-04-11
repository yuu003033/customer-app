<?php

namespace App\Http\Controllers;

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
        return view('home');
    }
    public function customer()
    {
        $user = \Auth::user();
        return view('customer');
    }
    public function detail()
    {
        return view('home');
    }
    public function karute()
    {
        $user = \Auth::user();
        return view('karute');
    }
    public function registerCustomer(){
        $user = \Auth::user();
        return view('registerCustomer');
    }
}
