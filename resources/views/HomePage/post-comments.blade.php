@extends('layouts.layout')
@section('content')
    <div style="margin-left: 500px">

    <div class="card text-center " style="width:50%;text-align: center;" >
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text"> {{ $post->description }}</p>
            <a href="{{ route('homepage_post_comments',$post->id) }}" class="btn btn-primary">comments</a>
        </div>
    </div >
    <div class="commentss">
        <i class="nav-icon fas fa-comment"></i>

        <h1>Комментарии:</h1>
        <div>
            @foreach($post_comments as $comment)
                <br>
                @if($comment->user_id == auth()->user()->id)

                    <div>
                        {{$comment->created_at}}
                        {{$user->name}}
                        {{ $comment->comment }}
                    </div>

                @else
                    <div>
                        {{ $comment->comment }}
                    </div>
                @endif

            @endforeach
                <hr>
                <form action="{{ route('admin_post_comments_store') }}#comment" class="mt-5" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row" id="comment">

                        <div class="col-sm-10">
                            <input type="hidden" value="{{ $user->id }}" class="form-control" name="user_id" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Имя пользователя
                        </label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $user->name }}" disabled class="form-control"  id="inputPassword">
                        </div>
                    </div>

                    @error('user_id')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    <div class="form-group row">

                        <div class="col-sm-10">
                            <input type="hidden" value="{{ $post->id}}" class="form-control" name="post_id" id="inputPassword">
                        </div>
                    </div>  <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Названия поста
                        </label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ $post->title}}" disabled class="form-control"  id="inputPassword">
                        </div>
                    </div>

                    @error('post_id')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">
                            Комментарий
                        </label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ old('comment') }}" class="form-control" name="comment" id="inputPassword">
                        </div>
                    </div>

                    @error('comment')
                    <p style="color:red">{{ $message }}</p>
                    @enderror

                    @if(isset($error_message))
                        <p style="color:red">{{ $error_message }}</p>
                    @endif

                    <button class="btn btn-success mt-2" >
                        Оставить комментарий
                    </button>
                </form>
        </div>
        <br>
    </div>
    </div>


@endsection
