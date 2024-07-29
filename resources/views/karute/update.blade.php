@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('karute_update', ['id'=>$customer->customer_id]) }}" method="POST">
    @csrf
    @method('POST')
    <div class="card" style="width: 50%;">
    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
        <img src="{{ asset('images/no-img.jpg') }}" class="card-img-top" alt="" width="100">
        <div class="card-body">
            <p>ID：{{$customer->id}}</p>
            <p>名前：{{ $customer->name }}</p>
            <p class="card-text">施術内容記入</p>
            <textarea name="memo">{{ $customer->memo }}</textarea>
            <input type="file" name="imgPath" value="{{ $customer->imgPath }}">
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <h6 class="mb-1">施術項目</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="extention" {{ $customer->extention ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox1">エクステ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="lashlift" {{ $customer->lashlift ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox2">パーマ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="1" name="eyebrows" {{ $customer->eyebrows ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox3">まゆ毛</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="1" name="upAndDown" {{ $customer->upAndDown ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox4">上下</label>
            </li>
            <li class="list-group-item">
            <h6 class="mb-1">エクステ</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="1" name="lowerEyelashes" {{ $customer->lowerEyelashes ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox6">下まつげ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="1" name="off" {{ $customer->off ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox6">オフあり</label>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">右目</label>
                    <input type="text" class="form-control" id="validationCustom01" value="上"  name="rightUp" value="{{ $customer->rightUp }}">
                    <input type="text" class="form-control" id="validationCustom02" value="下" name="rightDown" value="{{ $customer->rightDown }}">
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">左目</label>
                    <input type="text" class="form-control" id="validationCustom03" value="上" name="leftUp" value="{{ $customer->leftUp }}">
                    <input type="text" class="form-control" id="validationCustom04" value="下" name="leftDown" value="{{ $customer->rightDown }}">
                
                </div>
            </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom05" value="右" name="eyebrowsRight" value="{{ $customer->eyebrowsRight }}">
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom06" value="左" name="eyebrowsLeft" value="{{ $customer->eyebrowsLeft }}">               
                </div>  
            </div>
            </li>
        </ul>
    </div>
    <div class="col-md-4 btn-group" role="group" aria-label="Basic button group">
    <input type="date" class="btn btn-outline-primary" name="date" value="{{ $customer->date }}">
        <input class="btn btn-outline-primary" type="submit" value="更新">
    </div>
    </form>
</div>
@endsection
