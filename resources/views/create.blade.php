@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">新規メモ作成</div>
        <form class="card-body my-card-body" action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">             
                <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
</div>
@endsection
