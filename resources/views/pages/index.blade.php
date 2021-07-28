
@extends('layouts.app')

@section('content')
    @if(Auth::guest())
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the First Page created using Laravel</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    @else
        <div class="card m-5">
            <div class="card-body text-center">
                <h3>Hello {{ Auth::user()->name }} you're successfully logged In! </h3>
                <br>
                 <h1>Come Take A Look</h1>
            </div>
        </div>
    @endif
@endsection

