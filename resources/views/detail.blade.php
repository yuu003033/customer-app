@extends('layouts.app')

@section('content')
<div class="container">

  <h1>顧客詳細</h1>
 
  <p>ID：{{$customer->id}}</p>
  <p>名前：{{$customer->name}}</p>
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
          <td>2024/5/6</td>
          <td>エクステ</td>
          <td>＜オフ有り＞100本</td>
          <td><a href="">カルテ詳細</a></td>
          <td>ゴミ箱</td>
        </tr>
      </tbody>
    </table>
      
    </div>
  </div>

</div>


@endsection
