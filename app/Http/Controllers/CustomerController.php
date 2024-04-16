<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //顧客情報
    public function index(Request $request){
        // 一覧ページ
        $user = \Auth::user();
        $karuteLists = Karute::where('');
        return view('customer');
    }
    public function new(Request $request){
        // 新規作成ページ
        return view('customer');
    }
    public function create(Request $request){
        // 新作成処理
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
    public function delete(Request $request){
        // 削除処理
        return view('customer');
    }
}
