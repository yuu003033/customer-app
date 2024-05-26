@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
          <div class="row justify-content-flex-start">
              <div class="col-md-8">
                  <label for="trash-input">ゴミ箱内</label><i id='/' class="fa-solid fa-trash-can"></i>
                
                    <table class="w-100 table table-hover">

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
                        <form method="POST" action="{{ route }}">
                            @csrf
                           
                    @foreach($karuteLists as $list)
                            <tr id="{{$list->id}}">
                                <td>{{ ($list->id) }}</td>
                                <td>{{ ($list->name) }}</td>
                                <td></td>
                                <td><button type="submit" class="btn-outline-primary btn-lg">元に戻す</td>
                                <td>
                                    <form action="{{ route('delete', ['id'=>$list->id]) }}" method="POST">
                                        @csrf
                                    <input type="hidden" name="list_id" value="{{$list['id']}}">
                                    <button type="submit" onClick="deleteConfirm()" name="delete" class="btn-outline-primary btn-lg">削除</td>
                                    </form>
                            
                            </tr>
                        </form>
                    @endforeach
                        </tbody>
                    </table>
                    @if($list['status'] === 1)
                    <form action="/delete" method="POST">
                        @csrf
                          <button type="submit" class="btn-outline-primary btn-lg">ゴミ箱を空にする</button>
                          </form>
                        <p>データはありません。</p>
                    </form>  
                    @endif  
              </div>
          </div>
      </div>
</div>


@endsection