<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karute;
use App\Models\Customer;

class KaruteController extends Controller
{
    //カルテ情報
    public function karute($id){
        // カルテ登録ページ
        $customer = Customer::find($id);
        // $customers->name =$request->name;
 

        return view('karute', compact('customer'));
    }
    public function create(Request $request){
        return view('create');
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
        $karutes->rightDown = $request->rightDown;
        $karutes->leftDown = $request->leftDown;
        $karutes->eyebrowsRight = $request->eyebrowsRight;
        $karutes->eyebrowsLeft = $request->eyebrowsLeft;
        $karutes->date = $request->date;
        $karutes->imgPath = $request->imgPath;

        // dd($karutes);
        // DBに保存
        $karutes->save();
        // return view('home', compact('$karutes'));
        return redirect()->route('home');
    }
    public function update(Request $request, $id){
        // 編集処理
        $karutes = Customer::make($request->all(),[
            'memo' =>'required',
            'extention' =>'required',
            'lashlift' =>'required',
            'eyebrows' =>'required',
            'upAndDown' =>'required',
            'lowerEyelashes' =>'required',
            'off' =>'required',
            'rightUp' =>'required',
            'leftUp' =>'required',
            'rightDown' =>'required',
            'leftDown' =>'required',
            'eyebrowsRight' =>'required',
            'eyebrowsLeft' =>'required',
            'date' =>'required',
            'imgPath' =>'required',

        ]);
        if($karutes->fails()){
            return redirect($id)
            ->withInput()
            ->withErorrs($karutes);
        }
        $karutes = Customer::find($id);
        $karutes->memo =$request->memo;
        $karutes->extention =$request->extention;
        $karutes->lashlift =$request->lashlift;
        $karutes->eyebrows =$request->eyebrows;
        $karutes->upAndDown =$request->upAndDown;
        $karutes->lowerEyelashes =$request->lowerEyelashes;
        $karutes->off =$request->off;
        $karutes->rightUp = $request->rightUp;
        $karutes->leftUp = $request->leftUp;
        $karutes->rightDown = $request->rightDown;
        $karutes->leftDown = $request->leftDown;
        $karutes->eyebrowsRight = $request->eyebrowsRight;
        $karutes->eyebrowsLeft = $request->eyebrowsLeft;
        $karutes->date = $request->date;
        $karutes->imgPath = $request->imgPath;
        $karutes->save();
    
        
        return view('karutes');
    }
    // public function detail($id){
    //     $customer = Customer::find($id);
    //     return view('detail');
    // }

    // public function karute_edit($id){
    //     // 編集ページ
    //     $customers = Customer::find($id);
    //     return view('index', compact('customers'));
    // }
    
}
