@extends('layouts.admin')

@section('content')

    <div class="card-body" >
        <form action="{{ route('admin_posts_store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    title
                </label>
                <div class="col-sm-10">
                    <input type="text" value="{{ old('title') }}" class="form-control" name="title" id="inputPassword">
                </div>
            </div>

            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">

                    image

                </label>
                <div class="col-sm-10">
                    <input type="file" value="{{ old('image') }}" class="form-control" name="image" >
                </div>
            </div>

            @error('image')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                   Description
                </label>
                <div class="col-sm-10">
                    <textarea  class="form-control" value="{{ old('description') }}" name="description" id="inputPassword"></textarea>
                </div>
            </div>

            @error('description')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <br>
            <button class="btn btn-primary">
                create
            </button>
            </form>
    </div>

@endsection


