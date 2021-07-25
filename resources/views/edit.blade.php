@extends('layouts.app')

@section('javascript')
<script src="/js/confirm.js"></script>
@section('content')
<div class="card">
        <div class="card-header d-flex justify-content-between">メモ編集
            <form class="card-body" id="delete-form" action="{{ route('destroy') }}" method="POST">
                @csrf
                <input type="hidden" name="memo_id" value="{{ $edit_memo['id'] }}" />
                <i class="fas fa-trash mr-3" onclick="deleteHandle(event);"></i>
           
            </form>
        </div>
        <form class="card-body my-card-body" action="{{ route('update') }}" method="POST">
            @csrf
            <input type="hidden" name="memo_id" value="{{ $edit_memo['id'] }}" />
            <div class="mb-3">             
                <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力">{{ 
                    $edit_memo['content'] }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
</div>
@endsection
