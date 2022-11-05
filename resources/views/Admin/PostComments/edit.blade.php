@extends('layouts.admin')

@section('content')


    <div class="card-body">
        <form action="{{ route('admin_post_comments_update',$post_comment->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    user_id
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_id" id="inputPassword" value="{{ $post_comment->user_id }}">
                </div>
            </div>


            @error('user_id')
                <p style="color:red">{{ $message }}</p>
            @enderror


            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    post_id
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="post_id" id="inputPassword" value="{{ $post_comment->post_id }}">
                </div>
            </div>

            @error('post_id')
            <p style="color:red">{{ $message }}</p>
            @enderror


            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    comment
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="comment" id="inputPassword" value="{{ $post_comment->comment }}">
                </div>
            </div>

            @error('comment')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <button class="btn btn-primary">
                Update
            </button>
            <form>


@endsection


