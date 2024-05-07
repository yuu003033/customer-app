@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
          <div class="row justify-content-flex-start">
              <div class="col-12 col-md-6">
                  <label for="">ゴミ箱</label><i id='/' class="fa-solid fa-trash-can"></i>
                  
                    <table class="w-1-- table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>最終来店履歴</th>
                                <th class="float-end">元に戻す</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                        </tbody>
                    </table>
                          <button type="submit" class="btn-outline-primary btn-lg">削除</button>
             
              </div>
          </div>
      </div>
</div>


@endsection