@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <label for="">名前検索</label>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="col-md-8">
                <div class="container-fluid">
                    <form method="POST" class="d-flex" role="search" action="/store">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>    
                    </form>   
                </div>
            </div>
            <div class="col-md-2">
                <a class="nav-regAccount" href="{{ route('new') }}">新規登録</a>
            </div>
            <div class="col-md-2">
                <a class="nav-trashBox" href="{{ route('trashBox') }}">ゴミ箱へ</a>        
            </div>

        </nav>
    </div>
    <div class="row justify-content-center">
        <label for="{{ route('store') }}" method="POST">登録リスト</label>
        @csrf
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="col-md-8">
                <div class="container-fluid">
                    <table class="w-100 table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>最終来店履歴</th>
                                <th>メニュー</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody class="tr_lists">
                    @foreach($karuteLists as $list)
                        <tr id="{{$list->id}}">
                            <td>{{ ($list->id) }}</td>
                            <td>{{ ($list->name) }}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <form action="/trashBox" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$list->id}}">
                                <button type="button" class="trash-area" onClick="trashBox({{$list->id}})">
                                <i id='deleteButton(index)' class="fa-solid fa-trash-can"></i>
                                </button>
                                </form>
                                
                            </td>
                            <td>
                                <button type="button" onclick="">表示</button>
                            </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </nav>
    </div>
</div>


@endsection
