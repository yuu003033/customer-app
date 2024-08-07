<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Karute;

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
        $customers->name = $request->name ?? '';
        $customers->telephone = $request->telephone ?? '';
        $customers->prefecture = $request->prefecture ?? '';
        $customers->city = $request->city ?? '';
        // $customers->address2 = $request->address2 ?? '';
        // $customers->status = 0;

        // dd($customers);
        // DBに保存
        $customers->save();
          // リダイレクト処理
        return redirect()->route('home');
    }
    public function create(Request $request){

        // 新規顧客作成処理
        $customersList->create();
    }
    public function edit($id){
        // 編集ページ
        $customers = Customer::find($id);

        return view('customer.edit', compact('customers'));
    }
    public function update(Request $request, $id){
        // 顧客情報の更新
        $customers = Customer::find($id);
        $customers->name = $request->input('name');
        $customers->telephone = $request->input('telephone');
        $customers->zipcode = $request->input('zipcode');
        $customers->prefecture = $request->input('prefecture');
        $customers->city = $request->input('city');
        // $customers->address2 = $request->input('address2');

        $customers->save();
        return redirect()->route('detail',['id' => $customers->id]);
    }
    public function changeStatus($id){
        $customer = Customer::find($id);
        // dd($customer);
        $customer->fill(['status'=>1])->save();
      
        return redirect()->route('trashBox');
    }
    public function trashBox(){
        // 削除ページ
        $karuteLists = Customer::where('status',1)->get();
    //    dd($karuteLists);
        return view('trashBox', compact('karuteLists'));
    }
    public function delete(Request $request){
         // 削除処理
        $karuteLists = Customer::find($request->list_id)->delete();
        
        return redirect()->route('home');
    }
    public function restore($id){
        $customer = Customer::find($id);
        // dd($customer);
        $customer->fill(['status'=>0])->save();
      
        return redirect()->route('home');
    }
    public function detail($id)
    {
        $customer = Customer::find($id);
        $karutes = Karute::where('customer_id', $id)->orderBy('date', 'desc')->get();
        foreach($karutes as $karute){
            $menu = '';
            if ($karute->extention == true){
                $menu.= 'エクステ ';
            }
            if ($karute->lashlift == true){
                $menu.= 'パーマ ';
            }
            if ($karute->eyebrows == true){
                $menu.= '眉毛 ';
            }
            if ($karute->upAndDown == true){
                $menu.= '上下 ';
            }
            if ($karute->off == true){
                $menu.= '【オフ有り】 ';
            }
            if ($karute->lowerEyelashes == true){
                $menu.= '＋下まつ毛 ';
            }
            $karute['menu'] = $menu;
        }
        return view('detail', compact('customer', 'karutes'));
    }
    public function deleteAll(){
    
        $customers = Customer::where('status',1)->delete();
        
        return redirect()->route('home');
    }
    
}
