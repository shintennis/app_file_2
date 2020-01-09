@extends('layouts.app')

@section('content')

<div class="card" style="width: 60%; margin: 0 auto; margin-bottom: 30px;">
    <h5 class="card-header" style="text-align: center; background: gray; color: white;">プロフィール</h5>
    <div class="card-body">
    <img width="20%" height="20%" src="https://cdn.pixabay.com/photo/2019/12/06/14/01/sea-4677421_960_720.jpg" alt="#">
    <hr>
    <h3 class="card-title">shin</h3>
    <p class="card-text">コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
    <hr>
    <div class="like" style="display: flex; justify-content: flex-start;">
        <a href="#" style="border-radius: 50px; margin-right: 20px;"  class="btn btn-primary">プロフィール編集</a>
        <p style="background: lightpink; padding: 6px 12px; margin: 0; border-radius: 50px;" class="like-botton">いいねの数：</p>
    </div>
</div>

    <h5 class="card-header" style="text-align: center; background: lightgray;">自分の投稿一覧</h5>
    <div class="card-body">
        <div class="my-parts" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
                <img style="margin-bottom: 20px;" width="250px" height="250px" src="https://cdn.pixabay.com/photo/2019/12/22/14/19/car-4712664_960_720.jpg">
        </div>
    </div>

@endsection