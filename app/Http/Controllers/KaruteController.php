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

        return view('karute.new', compact('customer'));
    }
    public function create(Request $request){
        // カルテの登録画面
        return view('create.new');
    }
    public function store(Request $request, $id){
        // バリデーション
        // dd($request->all());
        $request->validate([
            'customer_id' => 'required|integer',
            'memo' => 'nullable|string',
            'extention' => 'required|string', // ここでstringとしてバリデーション
            'lashlift' => 'nullable|boolean',
            'eyebrows' => 'nullable|string',
            'upAndDown' => 'nullable|boolean',
            'lowerEyelashes' => 'nullable|boolean',
            'off' => 'nullable|boolean',
            'rightUp' => 'nullable|integer',
            'leftUp' => 'nullable|integer',
            'rightDown' => 'nullable|integer',
            'leftDown' => 'nullable|integer',
            'eyebrowsRight' => 'nullable|string',
            'eyebrowsLeft' => 'nullable|string',
            'date' => 'required|date',
            'imgPath' => 'nullable|string',
        ]);
    
        $karutes = new Karute;
        $karutes->customer_id = $request->customer_id;
        $karutes->memo = $request->memo;
    
        // カスタム変換ロジック
    $karutes->extention = $request->extention == 'エクステ' ? 1 : 0;
    $karutes->lashlift = $request->lashlift == 'パーマ' ? 1 : 0;
    $karutes->eyebrows = $request->eyebrows == 'まゆ毛' ? 1 : 0;
    $karutes->upAndDown = $request->upAndDown == '上下' ? 1 : 0;
    $karutes->lowerEyelashes = $request->lowerEyelashes == '下まつげ' ? 1 : 0;
    $karutes->off = $request->off == 'オフあり' ? 1 : 0;

    // 他のフィールドの値をそのまま代入
    $karutes->rightUp = $request->rightUp;
    $karutes->leftUp = $request->leftUp;
    $karutes->rightDown = $request->rightDown;
    $karutes->leftDown = $request->leftDown;
    $karutes->eyebrowsRight = $request->eyebrowsRight;
    $karutes->eyebrowsLeft = $request->eyebrowsLeft;
    $karutes->date = $request->date;
    $karutes->imgPath = $request->imgPath;

    // 保存前にログ出力
    Log::info('保存前のデータ: ', $karutes->toArray());

        $karutes->save();
         // データが保存されたことを確認するためのデバッグ

    Log::info('保存完了: ', ['karute_id' => $karutes->id]);
    // return view('detail', compact('karutes'));
        return view('home', compact('karutes'));
    }
    

  
    public function update(Request $request, $id){
        // 編集処理
       
        $karutes = Karute::find($id);
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

    public function edit($id){
        // 編集ページ
        $customer = Customer::find($id);
        return view('karute.edit', compact('customer'));
    }
    
}
