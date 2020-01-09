@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">プロフィール</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- エラーメッセージ。なければ表示しない -->
                    @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <!-- フォーム -->
                    <form action="{{ url('home') }}" method="POST" enctype="multipart/form-data">

                        <!-- アップロードした画像。なければ表示しない -->
                        @isset ($filename)
                        <div>
                            <img src="{{ asset('storage/' . $filename) }}">
                        </div>
                        @endisset

                        <label for="photo">画像ファイル:</label>
                        <input type="file" class="form-control" name="file">
                        <br>
                        <hr>
                        {{ csrf_field() }}
                        <button class="btn btn-success"> Upload </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
