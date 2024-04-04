@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                <a class="nav-regAccount" href="#">新規登録</a>
            </div>
            <div class="col-md-2">
                <a class="nav-trashBox" href="#">ゴミ箱へ</a>        
            </div>
        </nav>
    </div>
</div>


@endsection
