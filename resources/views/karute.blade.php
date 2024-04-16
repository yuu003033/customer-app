@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card" style="width: 50%;">
        <img src="{{ asset('images/no-img.jpg') }}" class="card-img-top" alt="" width="100">
        <div class="card-body">
            <!-- <h5 class="card-title">名前</h5> -->
            <p class="card-text">施術内容記入</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <h6 class="mb-1">施術項目</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">エクステ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">パーマ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">まゆ毛</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                <label class="form-check-label" for="inlineCheckbox4">上下</label>
            </li>
            <li class="list-group-item">
            <h6 class="mb-1">エクステ</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">下まつげ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">オフあり</label>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">右目</label>
                    <input type="text" class="form-control" id="validationCustom01" value="上" required>
                    <input type="text" class="form-control" id="validationCustom01" value="下" required>
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">左目</label>
                    <input type="text" class="form-control" id="validationCustom02" value="上" required>
                    <input type="text" class="form-control" id="validationCustom02" value="下" required>
                
                </div>
            </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom01" value="右" required>
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom02" value="左" required>               
                </div>  
            </div>
            </li>
        </ul>
    </div>
    <div class="col-md-4">
        <input class="btn btn-primary" type="button" value="編集">
        <input class="btn btn-primary" type="submit" value="登録">
        </div>
    </div>


@endsection
