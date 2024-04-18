<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //顧客情報
    public function index(){
        // 一覧ページ
        $user = \Auth::user();
        $karuteLists = Karute::where('');
        return view('customer');
    }
    public function new(Request $request){
        // 新規作成ページ
        $data = $request->all();

        $customer_list = Customer::insertGetId([
            'content' => $data['content'], 
            'visited_date' => $data['visited_date'],
            'user_id' => $data['user_id'], 
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => 1
        ]);
        // リダイレクト処理
        return redirect()->back();
    }
    public function store(Request $request){
        $data = $request->all();
        
        return redirect()->back();
    }
    public function create(Request $request){
        // 新規作成処理
        return view('customer');
    }
    public function edit(Request $request){
        // 編集ページ
        return view('customer');
    }
    public function update(Request $request){
        // 編集処理
       
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
