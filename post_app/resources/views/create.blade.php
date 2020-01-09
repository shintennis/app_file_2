@extends('layouts.app')

@section('content')
<div class="container vh-100 create-container">
    <form method="POST" enctype="multipart/form-data" action="{{ route('store') }}" class="create-form">
        @csrf

        <h2 class="mt-1">投稿する</h2>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group mt-4">
            <label>画像</label>
            <input type="file" class="form-control-file" name="image">
        </div>

        <div>
            <textarea name="content" rows="2" class="form-control mt-4" placeholder="コメント"></textarea>
        </div>

        {{ csrf_field() }}
        <div class="text-right mt-4">
            <button type="submit" class="btn btn-success btn-sm text-white" style="padding: 10px 20px;">投稿</button>
            <a href="{{ route('index') }}" class="btn btn-warning btn-sm text-white" style="padding: 10px 20px;">キャンセル</a>
        </div>

    </form>
</div>

@endsection