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
            'customer_id' => 'required',
            'date' => 'date',
            // 'imgPath' => 'string',
        ]);
    //  dd($request->all());
        $karutes = new Karute;
        $karutes->customer_id = $request->customer_id;
        $karutes->memo = $request->memo ?? '';
    
        // カスタム変換ロジック
        $karutes->extention = $request->has('extention') ? 1 : 0;
        $karutes->lashlift = $request->has('lashlift') ? 1 : 0;
        $karutes->eyebrows = $request->has('eyebrows') ? 1 : 0;
        $karutes->upAndDown = $request->has('upAndDown') ? 1 : 0;
        $karutes->lowerEyelashes = $request->has('lowerEyelashes') ? 1 : 0;
        $karutes->off = $request->has('off') ? 1 : 0;
    
        // 他のフィールドの値をそのまま代入
        $karutes->rightUp = $request->rightUp ?? '';
        $karutes->leftUp = $request->leftUp ?? '';
        $karutes->rightDown = $request->rightDown ?? '';  // nullの場合は空文字を使用
        $karutes->leftDown = $request->leftDown ?? '';
        $karutes->eyebrowsRight = $request->eyebrowsRight ?? '';
        $karutes->eyebrowsLeft = $request->eyebrowsLeft ?? '';
        $karutes->date = $request->date;
        $karutes->imgPath = $request->imgPath ?? '';
// dd($request->all());
    // 保存前にログ出力
    // Log::info('保存前のデータ: ', $karutes->toArray());
        $karutes->save();
    //      // データが保存されたことを確認するためのデバッグ
    // Log::info('保存完了: ', ['karute_id' => $karutes->id]);
    return redirect()->route('detail',['id'=>$request->customer_id]);
    }

    public function update(Request $request,$id){
        // 編集処理
        $karute = Karute::find($id);
     
        // $karutes->customer_id =$request->customer_id;
        $karute->memo = $request->memo;
        $karute->extention = $request->extention ? 1 : 0;
        $karute->lashlift = $request->lashlift ? 1 : 0;
        $karute->eyebrows = $request->eyebrows ? 1 : 0;
        $karute->upAndDown = $request->upAndDown ? 1 : 0;
        $karute->lowerEyelashes = $request->lowerEyelashes ? 1 : 0;
        $karute->off = $request->off ? 1 : 0;
        $karute->rightUp = $request->rightUp;
        $karute->leftUp = $request->leftUp;
        $karute->rightDown = $request->rightDown;
        $karute->leftDown = $request->leftDown;
        $karute->eyebrowsRight = $request->eyebrowsRight;
        $karute->eyebrowsLeft = $request->eyebrowsLeft;
        $karute->date = $request->date;
        // $karute->imgPath = $request->imgPath;
        // dd($request->all());
        $karute->save();

        return redirect()->route('karute_edit', ['id' => $karute->id]);
    }
    public function detail($id){
        $customer = Customer::find($id);
        return view('detail');
    }

    public function edit($id){
        // 編集ページ
        $karute = Karute::find($id);
        $customer = Customer::find($karute->customer_id);
        // dd($karute);
        return view('karute.edit', compact('karute','customer'));
    }
    public function delete($id){
        $karute = Karute::find($id)->delete();
        return redirect()->route('home');
    }
}
