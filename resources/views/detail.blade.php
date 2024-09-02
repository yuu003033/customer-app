@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row g-0 text-center-bottom">
    <div class="col-6 col-md-4">
        <h1 class="m-0">顧客詳細</h1>
    </div>
    <div class="col-sm-6 col-md-8 btn-group" role="group">
      <a class="btn btn-outline-success" href="{{ route('karute', ['id'=>$customer->id]) }}">新規カルテ作成</a>
      <a class="btn btn-outline-success" href="{{ route('edit', ['id'=>$customer->id]) }}">顧客編集</a>
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
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
  @foreach($karutes as $karute)
        <tr>
          <td>{{$karute->date}}</td>
          <td>{{$karute->menu}}</td>
          <td><a href="{{ route('karute_edit',['id'=>$karute->id]) }}">カルテ詳細</a></td>
        </tr>
  @endforeach      
      </tbody>
 
    </table>
      
    </div>
    <a href="{{ route('home') }}" class="btn btn-outline-dark">＜ホーム画面に戻る</a>
  </div>

</div>


@endsection
