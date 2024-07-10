@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('karute_store') }}" method="POST">
    @csrf
    <div class="card" style="width: 50%;">
    <input type="hidden" nama="customer_id" value="{{ $customer->id }}">
        <img src="{{ asset('images/no-img.jpg') }}" class="card-img-top" alt="" width="100">
        <div class="card-body">
            <p>ID：{{$customer->id}}</p>
            <p>名前：{{ $customer->name }}</p>
            <p class="card-text">施術内容記入</p>
            <textarea name="memo"></textarea>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <h6 class="mb-1">施術項目</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="extention">
                <label class="form-check-label" for="inlineCheckbox1">エクステ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="lashlift">
                <label class="form-check-label" for="inlineCheckbox2">パーマ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" name="eyebrows">
                <label class="form-check-label" for="inlineCheckbox3">まゆ毛</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" name="upAndDown">
                <label class="form-check-label" for="inlineCheckbox4">上下</label>
            </li>
            <li class="list-group-item">
            <h6 class="mb-1">エクステ</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5" name="lowerEyelashes">
                <label class="form-check-label" for="inlineCheckbox6">下まつげ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6" name="off">
                <label class="form-check-label" for="inlineCheckbox6">オフあり</label>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">右目</label>
                    <input type="text" class="form-control" id="validationCustom01" value="上"  name="rightUp" required>
                    <input type="text" class="form-control" id="validationCustom02" value="下" name="rightDown" required>
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">左目</label>
                    <input type="text" class="form-control" id="validationCustom03" value="上" name="leftUp" required>
                    <input type="text" class="form-control" id="validationCustom04" value="下" name="leftDown" required>
                
                </div>
            </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom05" value="右" name="eyebrowsRight" required>
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom06" value="左" name="eyebrowsLeft" required>               
                </div>  
            </div>
            </li>
        </ul>
    </div>
    <div class="col-md-4 btn-group" role="group" aria-label="Basic button group">
        <input class="btn btn-outline-primary" type="submit" value="編集">
        <input class="btn btn-outline-primary" type="submit" value="登録">
    </div>
    </form>
</div>
@endsection
