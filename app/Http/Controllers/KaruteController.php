<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaruteController extends Controller
{
    //カルテ情報
    public function karute(){
        // カルテ登録ページ
        return view('karute');
    }
    public function store(Request $request){
        // 登録処理
        $karutes = new Karute;
        // dd($karutes);
        // フォームから送信されたデータ取得し、インスタンスの属性に代入する
        $karutes->memo = $request->memo;
        $karutes->extention = $request->extention;
        $karutes->lashlift = $request->lashlift;
        $karutes->eyebrows = $request->eyebrows;
        $karutes->upAndDown = $request->upAndDown;
        $karutes->lowerEyelashes = $request->lowerEyelashes;
        $karutes->off = $request->off;
        $karutes->rightUp = $request->rightUp;
        $karutes->leftUp = $request->leftUp;
        $karutes->rightDow = $request->rightDow;
        $karutes->leftDown = $request->leftDown;
        $karutes->eyebrowsRight = $request->eyebrowsRight;
        $karutes->eyebrowsLeft = $request->eyebrowsLeft;
        $karutes->date = $request->date;
        $karutes->imgPath = $request->imgPath;

        // dd($karutes);
        // DBに保存
        $karutes->save();

        return redirect()->route('detail');
    }
    public function update(Request $request, $id){
        // 編集処理
        $customers = Customer::make($request->all(),[
            'name' =>'required',
            'telephone' =>'required',
            'zipcode' =>'required',
            'prefecture' =>'required',
            'city' =>'required',
        ]);
        if($customers->fails()){
            return redirect($id)
            ->withInput()
            ->withErorrs($customers);
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
    // public function edit($id){
    //     // 編集ページ
    //     $customers = Customer::find($id);
    //     return view('index', compact('customers'));
    // }
    
}
