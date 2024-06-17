@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" class="row gy-2 gx-3 align-items-center" action="{{ route('store') }}">
  @csrf
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">お名前</div>
      <input type="text" class="form-control" id="autoSizingInputGroup" 
      name="name" placeholder="name">
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">TEL</div>
      <input type="text" class="form-control" id="autoSizingInputGroup"  name="telephone" placeholder="000-0000-0000">
    </div>
  </div>
  
  <div class="col-auto">
    <label>
    <div class="input-group">
        <div class="input-group-text">郵便番号</div>
        <input type="text" name="zipcode" class="form-control" minlength="7" maxlength="8" pattern="\d*" autocomplete="shipping zipcode" id="autoSizingInputGroup" placeholder="0000000">
    </div>
    </label>
    </div>
    <div class="col-auto">
      <select class="form-select" id="inputGroupSelect01" name="prefecture">
        <option value="">都道府県</option>
        <option value="神奈川">神奈川</option>
        <option value="東京">東京</option>
        <option value="埼玉">埼玉</option>
        <option value="千葉">千葉</option>
        <option value="etc..">etc..</option>
      </select>
    </div>
  
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">>市町村区</label>
    <div class="input-group">
      <div class="input-group-text">市町村</div>
      <input type="text" class="form-control" name="city" id="autoSizingInputGroup">
    </div>
  </div>
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">建物名等</label>
    <div class="input-group">
      <div class="input-group-text">その他住所</div>
      <input type="text" class="form-control" name="address2" id="autoSizingInputGroup">
    </div>
  </div>
 
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">登録</button>
  </div>
</form>
</div>


@endsection
