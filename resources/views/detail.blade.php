@extends('layouts.app')

@section('content')
<div class="container">

  <h1>顧客詳細</h1>
 
  <label for="">ID：{{$customer->id}}</label>
  <label for="">名前：{{$customer->name}}</label>
  <div class="row">
    <div class="col-4">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>

      </div>
    </div>
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1">Item 1</h4>
        <p>...</p>
    
      </div>
    </div>
  </div>

</div>


@endsection
