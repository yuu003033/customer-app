@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
          <div class="row justify-content-flex-start">
              <div class="col-12 col-md-6">
                  <label for="">ゴミ箱</label>
                      <form method="POST" action="{{ route('update') }}">
                          @csrf
                          
                          <button type="submit" class="btn-outline-primary btn-lg">削除</button>
                      </form>
              </div>
          </div>
      </div>
</div>


@endsection