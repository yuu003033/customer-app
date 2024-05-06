<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //顧客情報
    public function index(){
        // 一覧ページ
        $karuteLists = $this->karute->findAllkakute();
        return view('home',compact('karuteLists','customer'));
    }
    public function new(){
        // 新規作成ページ
        return view('new');
        // リダイレクト処理
    }
    public function store(Request $request){
        // 登録処理
        $karuteLists  = Customer::find($request->all());
        // return redirect()->route('store');
        return view('home',compact('karuteLists'));
    }
    public function create(Request $request){
        // try{
        // 新規顧客作成処理

        $customers = new Csutomer();
        
        // フォームから送信されたデータ取得し、インスタンスの属性に代入する
        $customers->name = $request->inputs['name'];
        $customers->telephone = $request->inputs['telephone'];
        $customers->zipcode = $request->inputs['zipcode'];
        $customers->prefecture = $request->inputs['prefecture'];
        $customers->city = $request->inputs['city'];
        $customers->address = $request->inputs['address'];

        // DBに保存
        $customers->save();
        
        //     return redirect('home')->with('message', '登録が完了しました！');
        // } catch (\Exception $e) {
        //     return back()->with('message', '登録に失敗しました。' . $e->getMessage());
        // }
        $customersList = new Customer('customers');
        $customersList->create();
    }
    public function edit(Request $request){
        // 編集ページ
        return view('index');
    }
    public function update(Request $request){
        // 編集処理
        $user = \Auth::user();
        
        return view('customer');
    }
    public function trashBox(Request $request){
        // 削除ページ
        $user = \Auth::user();
        return view('trashbox');
    }
    public function delete(Request $request){
        // 削除処理
        return view('customer');
    }
}
