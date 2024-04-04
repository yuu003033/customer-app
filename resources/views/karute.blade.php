@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3">
        <img src="" class="card-img-top" alt="..." style="background-color:blue;">
        <div class="card-body">
            <h5 class="card-title">名前</h5>
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
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">右上</label>
                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">左上</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            </li>
            <li class="list-group-item">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">右下</label>
                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
            
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">左下</label>
                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                
            </div>
            </li>
        </ul>
    </div>
</div>


@endsection
