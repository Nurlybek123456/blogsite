@extends('layouts.admin')

@section('content')

    <div class="card-body" >
        <form action="{{ route('admin_post_comments_store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">
                    user_id
                </label>
                <div class="col-sm-10">
                    <input type="text" value="{{ old('user_id') }}" class="form-control" name="user_id" id="inputPassword">
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
                    <input type="text" value="{{ old('post_id') }}" class="form-control" name="post_id" id="inputPassword">
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
                    <input type="text" value="{{ old('comment') }}" class="form-control" name="comment" id="inputPassword">
                </div>
            </div>

            @error('comment')
            <p style="color:red">{{ $message }}</p>
            @enderror

            @if(isset($error_message))
                <p style="color:red">{{ $error_message }}</p>
            @endif

            <button class="btn btn-primary">
                create
            </button>
            </form>
    </div>


@endsection


