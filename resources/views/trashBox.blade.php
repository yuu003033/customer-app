@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
          <div class="row justify-content-flex-start">
              <div class="col-12 col-md-6">
                  <label for="{{ route('store') }}" method="POST">ゴミ箱</label><i id='/' class="fa-solid fa-trash-can"></i>
                  @if( count($karuteLists) > 0)
                    <table class="w-1-- table table-hover">
                    <tbody>
                        
                            @foreach( $karuteLists as $list )
                            <tr>
                                <th>{{ ($list->id) }}</th>
                                <th>>{{ ($list->name) }}</th>
                                <th>最終来店履歴</th>
                                <th class="float-end">元に戻す</th>
                                <th><button type="submit" class="btn-outline-primary btn-lg">削除</button></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form action="/delete" method="POST">
                        @csrf
                          <button type="submit" class="btn-outline-primary btn-lg">ゴミ箱を空にする</button>
                          </form>
                        @else
                        <p>データはありません。</p>
                        @endif
              </div>
          </div>
      </div>
</div>


@endsection