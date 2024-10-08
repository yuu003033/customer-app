@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <label for="">名前検索</label>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="col-md-8">
                <div class="container-fluid">
                    <form method="POST" class="d-flex" role="search" action="{{route('customer_name_search')}}">
                        @csrf
                        <input class="form-control me-2" type="text" name="customer_name" placeholder="顧客名" value="">
                        <input class="btn btn-outline-success" type="submit" value="検索">    
                    </form>   
                </div>
            </div>
            <div class="col-md-4">
                <div class="btn-group" role="group" aria-label="btn-outline-primary">
                        <a class="btn btn-outline-primary" href="{{ route('new') }}">新規登録</a>
                        <a class="btn btn-outline-primary" href="{{ route('trashBox') }}">ゴミ箱へ</a>        
                </div>
            </div>
        </nav>
    </div>
    <div class="row justify-content-center">
            <label for="/" method="POST">登録リスト</label>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="tr_lists">
                    @foreach($karuteLists as $list)
                        <tr id="{{$list->id}}">
                            <td class="align-middle">{{ $list->id }}</td>
                            <td class="align-middle">{{ $list->name }}</td>
                            <td></td>
                            <td class="align-middle">{{ $list->menu }}</td>
                            <td class="align-middle">
                                <form method="POST" action="{{ route('changeStatus',['id'=>$list->id]) }}">
                                @csrf
                                    <input type="hidden" name="trashBox" value="{{$list->id}}">
                                    <button type="submit" class="btn btn-outline-secondary btn-sm">
                                    <i id='deleteButton(index)' class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                                
                            </td>
                       
                            <td class="align-middle">
                                <input type="hidden" name="detail">
                                <a type="button" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('detail',['id'=>$list->id]) }}">顧客情報</a>
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
