<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    /**TOPページ
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
        $karuteLists  = Customer::where('status', 0)->get();
        
        return view('home',compact('karuteLists'));
    }
    
    public function detail()
    {
        return view('home');
    }
   
   
}
