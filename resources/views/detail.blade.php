@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row g-2">
    <div class="col-md-8">
      <div class="form-floating">
        <h1>顧客詳細</h1>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-floating">
        <div class="btn">
          <a href="{{ route('karute', ['id'=>$customer->id]) }}" class="btn btn-outline-primary">新規カルテ作成</a>
        </div>
      </div>
    </div>
  </div>
 
  <p>ID：{{$customer->id}}</p>
  <h3>名前：{{$customer->name}}</h3>
  <p>TEL：{{$customer->telephone}}</p>
  <p>郵便番号：{{$customer->zipcode}}</p>
  <p>都道府県：{{$customer->prefecture}}</p>
  <p>市町村区：{{$customer->city}}</p>
  

  <div class="row">
    <div class="col">
    </div>
    <h2>来店履歴</h2>
    <table class="table table-striped" >
      
      <thead>
        <tr>
          <th scope="col">来店日</th>
          <th scope="col">メニュー</th>
          <th scope="col">施術内容</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      
        <tr>
          <td></td>
          <td>エクステ</td>
          <td>＜オフ有り＞100本</td>
          <td><a href="{{ route('edit .karute',['id'=>$customer->id]) }}">カルテ詳細</a></td>
          <td><a href="">ゴミ箱</a></td>
        </tr>
      </tbody>
 
    </table>
      
    </div>
  </div>

</div>


@endsection
