@extends('layouts.app')

@section('content')
<div class="container">
<form class="row gy-2 gx-3 align-items-center">
  @csrf
<div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">会員番号</div>
      <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="0000">
    </div>
  </div>
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">お名前</div>
      <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="name">
    </div>
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
    <div class="input-group">
      <div class="input-group-text">TEL</div>
      <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="000-0000-0000">
    </div>
  </div>
  
  <div class="col-auto">
    <label>
    <div class="input-group">
        <div class="input-group-text">郵便番号</div>
        <input type="text" name="postal_code" class="form-control" minlength="7" maxlength="8" pattern="\d*" autocomplete="shipping postal-code" id="autoSizingInputGroup" placeholder="000-0000">
    </div>
    </label>
    </div>
    <div class="col-auto">
      <select class="form-select" id="inputGroupSelect01">
        <option selected>都道府県</option>
        <option value="1">神奈川</option>
        <option value="2">東京</option>
        <option value="3">埼玉</option>
        <option value="4">千葉</option>
      </select>
    </div>
  
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">>市町村</label>
    <div class="input-group">
      <div class="input-group-text">市町村</div>
      <input type="text" class="form-control" name="city" id="autoSizingInputGroup">
    </div>
  </div>
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">町名・番地</label>
    <div class="input-group">
      <div class="input-group-text">町名・番地</div>
      <input type="text" class="form-control" name="address1" id="autoSizingInputGroup">
    </div>
  </div>
  <div class="col-auto">
  <label class="visually-hidden" for="autoSizingInputGroup">建物名等</label>
    <div class="input-group">
      <div class="input-group-text">建物名等</div>
      <input type="text" class="form-control" name="address2" id="autoSizingInputGroup">
    </div>
  </div>
 
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">登録</button>
  </div>
</form>
</div>


@endsection
