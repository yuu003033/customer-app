@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
          <div class="row justify-content-flex-start">
              <div class="col-12 col-md-6">
                  <label for="trash-input">ゴミ箱内</label><i id='/' class="fa-solid fa-trash-can"></i>
                
                    <table class="w-1 table table-hover">

                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>最終来店日</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($karuteLists as $list)
                            <tr id="{{$list->id}}">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="submit" class="btn-outline-primary btn-lg">元に戻す</td>
                                <td><button type="submit" class="btn-outline-primary btn-lg">削除</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form action="/delete" method="POST">
                        @csrf
                          <button type="submit" class="btn-outline-primary btn-lg">ゴミ箱を空にする</button>
                          </form>
                      
                        <p>データはありません。</p>
                        
              </div>
          </div>
      </div>
</div>


@endsection