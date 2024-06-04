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
                           
                    @foreach($karuteLists as $list)
                            <tr id="{{$list->id}}">
                                <td>{{ ($list->id) }}</td>
                                <td>{{ ($list->name) }}</td>
                                <td></td>
                                <td>
                                @if($list['status'] === 1)
                                    <form action="{{ route('restore',['id'=>$list->id]) }}">
                                        <input type="hidden" name="list_id" value="{{$list['id']}}">
                                    
                                        <button type="submit" class="btn-outline-primary btn-lg">元に戻す</td>
                                    </form>
                                @endif
                                    
                                <td>
                                @if($list['status'] === 1)
                                    <form action="{{ route('delete', ['id'=>$list->id]) }}" method="POST" id="deleteForm{{ $list['id'] }}" >
                                    @csrf
                                    <input type="hidden" name="list_id" value="{{$list['id']}}">
                                    <button type="button" onClick="deleteConfirm({{ $list['id'] }})" name="delete" class="btn-outline-primary btn-lg">削除</td>
                                    </form>
                                    @endif  
                            </tr>
                     
                    @endforeach
                        </tbody>
                    </table>
                   
                    <form action="{{ route('deleteAll') }}" method="POST">
                        @csrf
                          <button type="submit" class="btn-outline-primary btn-lg">ゴミ箱を空にする</button>
                          </form>
                        <p>データはありません。</p>
                    </form>  
                 
              </div>
          </div>
      </div>
</div>


@endsection