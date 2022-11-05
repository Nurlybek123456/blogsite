@extends('layouts.layout')
@section('content')
    <div class="card-body card-item" style="margin-left: 500px" >
        <form action="{{ route('admin_posts_store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Название поста:
                </label>
                <div class="col-sm-6">
                    <input type="text" value="{{ old('title') }}" class="form-control" name="title" id="inputPassword">
                </div>
            </div>

            @error('title')
            <p style="color:red">{{ $message }}</p>
            @enderror

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Изображение
                </label>
                <div class="col-sm-6">
                    <input type="file" value="{{ old('image') }}" class="form-control" name="image" >
                </div>
            </div>

            @error('image')
            <p style="color:red">{{ $message }}</p>
            @enderror

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Описание
                </label>
                <div class="col-sm-6">
                    <textarea  class="form-control" value="{{ old('description') }}" name="description" id="inputPassword"></textarea>
                </div>
            </div>

            @error('description')
            <p style="color:red">{{ $message }}</p>
            @enderror

            <br>
            <button class="btn btn-primary mb-5">
                Добавить пост
            </button>
            <button class="btn btn-primary mb-5 close" id="close_form">
                Закрыть
            </button>
        </form>
    </div>
    <div style="margin-left: 500px">
        @foreach($posts as $post)
            <div class="card text-center mr-200" style="width:50%;text-align: center;" >
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text"> {{ $post->description }}</p>
                    <a href="{{ route('homepage_post_comments',$post->id) }}" class="btn btn-primary">comments</a>
                </div>
            </div >
            <br>
        @endforeach
            {{ $posts->links() }}

    </div>
@endsection
