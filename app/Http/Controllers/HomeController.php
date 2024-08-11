<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Karute;
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
        // $karuteLists  = Customer::with('karutes')->where('status', 0)->whereHas('karutes', function($q){
        //     if($q->exists()){
        //         $q->orderBy('updated_at', 'desc');
        //     }
            
        // })->get();
        $karuteLists = Customer::where('status', 0)->get();
        // dd($karuteLists);
        // $karutes = Karute::where('date')->orderBy('date', 'desc')->get();
        return view('home',compact('karuteLists'));
    }
}
