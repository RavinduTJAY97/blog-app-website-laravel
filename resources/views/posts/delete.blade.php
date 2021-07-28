@extends('layouts.app')
@section('content')

    <div class="card mt-5 pb-4">
        <div class="card-body text-center">
            <h1>Are You Sure You want to delete this Post</h1>
        </div>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <div class="text-center">
                <span><button class="btn btn-danger m-2">Delete</button><a href="/posts" class="btn btn-primary">Go Back</a></span>
            </div>
        </form>
    </div>
@endsection
