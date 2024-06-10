<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaruteController extends Controller
{
    //カルテ情報
    public function karute(Request $request){
        return view('karute');
    }
    public function update(Request $request, $id){
        // 編集処理
        $karuteEdit = KruteEdit::make($request->all(),[
            'name' =>'required',
            'telephone' =>'required',
            'zipcode' =>'required',
            'prefecture' =>'required',
            'city' =>'required',
        ]);
        if($karuteEdit->fails()){
            return redirect($id)
            ->withInput()
            ->withErorrs($karuteEdit);
        }
        $customers = Customer::find($id);
        $customers->name =$request->name;
        $customers->telephone =$request->telephone;
        $customers->zipcode =$request->zipcode;
        $customers->prefecture =$request->prefecture;
        $customers->city =$request->city;
        $customers->save();
    
        
        return view('customers');
    }
    public function edit($id){
        // 編集ページ
        $customers = Customer::find($id);
        return view('index', compact('customers'));
    }
    
}
