@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <label for="">名前検索</label>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="col-md-8">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
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
    <div class="container">
        @foreach($karuteLists as $customer_list)
        
        @endforeach
    </div>
</div>


@endsection
