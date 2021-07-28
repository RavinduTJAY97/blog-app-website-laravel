@extends('layouts.app')
@section('content')
    <div class="container m-5">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Post Title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Post Body</label>
                <textarea class="form-control ckeditor" id="body" rows="3"placeholder="Start Writing your blog here" name="body"></textarea>
            </div>
                <div class="form-group">
                    <label for="cover_image">Upload Image Here</label>
                    <input type="file" class="form-control-file" id="cover_image" name="cover_image">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
