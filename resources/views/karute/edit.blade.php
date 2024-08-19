@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('karute_update', ['id'=>$karute->id]) }}" method="POST">
    @csrf
    @method('POST')
    <div class="card" style="width: 50%;">
    <input type="hidden" name="customer_id" value="{{ $karute->customer_id }}">
        @if ($karute->imgPath)
        <input src="{{ Storage::url($karute->imgPath) }}" name="imgPath" alt="施術画像" style="max-width: 100%;">
        @else  
        <img src="{{ asset('images/no-img.jpg') }}" class="card-img-top" alt="" width="100">
        @endif

        <div class="card-body">
            <p>ID：{{$karute->customer_id}}</p>
            <p>名前：{{$customer->name}}</p>
            <p class="card-text">施術内容記入</p>
            <textarea name="memo">{{ $karute->memo }}</textarea>
            <!-- <input type="file" name="imgPath" value="{{ $karute->imgPath }}"> -->
            <!-- @if ($karute->imgPath)
            <img src="{{ Storage::url($karute->imgPath) }}" alt="施術画像" style="max-width: 100%;">
        @endif -->
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
            <h6 class="mb-1">施術項目</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="extention" {{ $karute->extention ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox1">エクステ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="lashlift" {{ $karute->lashlift ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox2">パーマ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="1" name="eyebrows" {{ $karute->eyebrows ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox3">まゆ毛</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="1" name="upAndDown" {{ $karute->upAndDown ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox4">上下</label>
            </li>
            <li class="list-group-item">
            <h6 class="mb-1">エクステ</h6>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="1" name="lowerEyelashes" {{ $karute->lowerEyelashes ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox6">下まつげ</label>
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="1" name="off" {{ $karute->off ? 'checked' : '' }}>
                <label class="form-check-label" for="inlineCheckbox6">オフあり</label>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">右目</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="上"  name="rightUp" value="{{ $karute->rightUp }}">
                    <input type="text" class="form-control" id="validationCustom02" placeholder="下" name="rightDown" value="{{ $karute->rightDown }}">
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">左目</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="上" name="leftUp" value="{{ $karute->leftUp }}">
                    <input type="text" class="form-control" id="validationCustom04" placeholder="下" name="leftDown" value="{{ $karute->rightDown }}">
                
                </div>
            </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="右" name="eyebrowsRight" value="{{ $karute->eyebrowsRight }}">
                
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">まゆ毛</label>
                    <input type="text" class="form-control" id="validationCustom06" placeholder="左" name="eyebrowsLeft" value="{{ $karute->eyebrowsLeft }}">               
                </div>  
            </div>
            </li>
        </ul>
    </div>
    <div class="d-flex mb-3" role="group" aria-label="Basic button group">
        <div class="p-2">
            <input type="date" class="btn btn-outline-primary" name="date" value="{{ $karute->date }}">
            <input class="btn btn-outline-primary" type="submit" value="更新">
        </div>
        <div class="ms-auto p-2" role="group" aria-label="Basic button">
        <input class="btn btn-outline-primary"  onClick="deleteKaruteConfirm({{ $karute->id }})" name="delete"  type="button" value="削除">
    </div>
    </div>
    </form>
    <form id="deleteForm{{ $karute->id }}" action="{{ route('karute_delete', ['id' => $karute->id]) }}" method="POST" style="display:none;">
    @csrf
    @method('POST')
    
    </form>
</div>
@endsection
