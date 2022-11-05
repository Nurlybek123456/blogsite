@extends('layouts.admin')

@section('content')


    <div class="card-body">
        <form action="{{ route('admin_posts_update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Name
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="inputPassword" value="{{ $post->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Image
                </label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    Description
                </label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="inputPassword">{{ $post->description }}</textarea>
                </div>
            </div>
            <br>
            <button class="btn btn-primary">
                Update
            </button>
            <form>


@endsection


