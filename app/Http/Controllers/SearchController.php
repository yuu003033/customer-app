<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class SearchController extends Controller
{
    public function customer_name(Request $request){
        $customer_name = $request->customer_name;
        $searchWord = '%' . $customer_name . '%';
        $karuteLists = Customer::where('name','LIKE', $searchWord)->where('status', 0)->get();
        // dd($customers);
        return view('home',compact('karuteLists'));
    }
}
