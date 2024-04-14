<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //顧客情報
  
        public function create(Request $request){
            return view('customer');
        }
}
