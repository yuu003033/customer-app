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
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>メニュー</option>
      <option value="1">エクステ</option>
      <option value="2">パーマ</option>
      <option value="3">まゆ毛</option>
    </select>
  </div>
  <div class="col-auto">
    <div class="form-check">
      
    </div>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">登録</button>
  </div>
</form>
</div>


@endsection
