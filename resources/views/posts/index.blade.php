@extends('layouts.app')
@section('content')
    <br>
    <h1>Posts</h1>
    @if(count($posts)>0)
        <div class="well">
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-body m-1">
                        <div class="row">
                            <div class="col-4">
                                <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
                            </div>
                            <div class="col-8">
                                <h2><a href="/posts/{{$post->id}}" class="anchor_class">{{$post->title}}</a>
                                </h2>
                                <br>
                                <small>Written On{{$post->created_at}}</small>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach <br>
            {{$posts->links()}}
        </div>
    @else
        <p>No Posts avaliable!</p>
    @endif
    @if(!Auth::guest())
        <a href="/posts/create" class="btn btn-primary m-2">Create One</a>
        <div class="dropdown">
    @endif
@endsection



