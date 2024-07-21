@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('karute_store', ['id'=>$customer->id]) }}" method="POST">
    @csrf
    <div class="card" style="width: 50%;">
        
        <div class="card-body">
            <p>ID：{{$customer->id}}</p>
            <p>名前：{{ $customer->name }}</p>
         
            <div class="col-md-4">
                <textarea name="memo" placeholder="施術内容記入"></textarea>
                <input type="file">
            </div>
            
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <h6 class="mb-1">施術項目</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="extention" name="extention">
                <label class="form-check-label" for="inlineCheckbox1">エクステ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="lashlift" name="lashlift">
                <label class="form-check-label" for="inlineCheckbox2">パーマ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="eyebrows" name="eyebrows">
                <label class="form-check-label" for="inlineCheckbox3">まゆ毛</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="upAndDown" name="upAndDown">
                <label class="form-check-label" for="inlineCheckbox4">上下</label>
            </li>
            <li class="list-group-item">
            <h6 class="mb-1">エクステ</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="lowerEyelashes" name="lowerEyelashes">
                <label class="form-check-label" for="inlineCheckbox5">下まつげ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="off" name="off">
                <label class="form-check-label" for="inlineCheckbox6">オフあり</label>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">右目</label>
                    <input type="text" class="form-control" id="validationCustom01"  name="rightUp" required>
                    <input type="text" class="form-control" id="inlineCheckbox5"  value="下" name="rightDown" required>
                
                </div>
                <div class="col-md-4">
                    <label class="form-label">左目</label>
                    <input type="text" class="form-control" id="validationCustom02"  name="leftUp" required>
                    <input type="text" class="form-control" id="inlineCheckbox5" value="下" name="leftDown" required>
                
                </div>
            </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom03" value="右" name="eyebrowsRight" required>
                
                </div>
                <div class="col-md-4">
                    <label class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom03" value="左" name="eyebrowsLeft" required>               
                </div>  
            </div>
            </li>
        </ul>
    </div>
    <div class="col-md-4 btn-group" role="group" aria-label="Basic button group">
        <input class="btn btn-outline-primary" type="submit" value="登録">
    </div>
    </form>
</div>
@endsection
