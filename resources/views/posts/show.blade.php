@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <br><br>
    <div class="card">
        <div class="card-body">
            <h3>{{$post->title}}</h3>
            <br>
            <div>
                <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
            </div>
            <p>{!!$post->body !!}</p>
        </div>
        {{--        <span><a href="/posts/{{$post->id}}/edit" class="btn btn-success m-2">Edit Post</a><a--}}
        {{--                href="/posts/{{$post->id}}/delete" class="btn btn-danger m-2">Delete Post</a></span>--}}
    </div>

    @if(!Auth::guest())
        @if(Auth::user()->id ==$post->user_id)
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-success m-2">Edit Post</a>
                    </div>
                    <div class="col-6">
                        <form method="post" action="{{ action('PostController@destroy',$post->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger m-2">Delete Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        @endif
@endif
@endsection
