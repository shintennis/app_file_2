@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: lightgray; text-align: center;">投稿一覧</div>
                    <div class="card-body">
                        @foreach($posts as $post)
                        <div class="card" style="background: lightblue; margin-bottom: 30px;">
                            <h3 style="margin-top: 10px; margin-left: 20px;">{{ Auth::user()->name }}</h3>
                            <hr style="margin: 0;">
                            <div class="card-body">
                            <img width="100%" height="100%" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                            <img src="data:image/png;base64,{{ $post->post }}" alt="投稿画像">
                            <hr>
                                <div class="item-image" style="display: flex; justify-content: flex-start; margin-bottom: 20px;">
                                        <p class="item-image">{{ $post->created_at }}</p>
                                        <i id="heart" class="far fa-heart fa-2x"></i>
                                        <i class="fas fa-heart fa-2x"></i>
                                    <a style="margin-left: 30px;" href="{{ route('delete',['id' => $post->id]) }}" id="button" class="btn btn-danger">削除</a>
                                </div>
                                <p class="card-text">{{ $post->content }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection