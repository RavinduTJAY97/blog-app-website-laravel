@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <br>
                        {{ __('You are logged in!') }}
                        <br><br>
                        <h1>{{ Auth::user()->name }}'s posts</h1>
                        @if(count($posts)>0)
                            <div class="well">
                                @foreach($posts as $post)
                                    <div class="card">
                                        <div class="card-body m-1">
                                            <a href="/posts/{{$post->id}}" class="anchor_class">{{$post->title}}
                                            </a><br>
                                            <small>Written On{{$post->created_at}}</small>
                                        </div>
                                    </div>
{{--                                    {{$posts->links()}}--}}
                                @endforeach <br>

                            </div>
                        @else
                            <p>No Posts avaliable!</p>
                        @endif

                        <div class="card-body text-center">
                            <a href="/posts/create" class="btn btn-success">Create New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
