<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function new(){
        // 新規作成ページ
        return view('new');
    }
    public function store(Request $request){
        // 登録処理
        $customers = new Customer;
        // dd($customers);
        // フォームから送信されたデータ取得し、インスタンスの属性に代入する
        $customers->name = $request->name;
        $customers->telephone = $request->telephone;
        $customers->zipcode = $request->zipcode;
        $customers->prefecture = $request->prefecture;
        $customers->city = $request->city;
        $customers->status = $request->status[0];
        // dd($customers);
        // DBに保存
        $customers->save();
          // リダイレクト処理
        return redirect()->route('home');
    }
    public function create(Request $request){
        // try{
        // 新規顧客作成処理

       
        
        //     return redirect('home')->with('message', '登録が完了しました！');
        // } catch (\Exception $e) {
        //     return back()->with('message', '登録に失敗しました。' . $e->getMessage());
        // }
        // $customersList = new Customer('customers');
        $customersList->create();
    }
    public function edit(Request $request){
        // 編集ページ
        return view('index');
    }
    public function update(Request $request){
        // 編集処理
        
        
        return view('customer');
    }
    public function trashBox(Request $idt){
        // 削除ページ
        $karuteLists = Customer::where([
            ['id', $id],
            ['deleted_at', 1],
        ])->get();
       
        return $karuteLists;
    }
    public function delete(Request $id){
        // 削除処理
    
        return redirect()->route('home');
    }
}
