<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaruteController extends Controller
{
    //カルテ情報
    public function karute(Request $request){
        return view('karute');
    }
   
}
