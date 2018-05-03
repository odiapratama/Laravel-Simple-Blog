@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <div class="jumbotron text-center">
        <p>This my first experiences to learn basic of Laravel Application</p>
        <p> <a class="btn btn-primary btn-lg" href="\login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="\regis" role="button">Register</a>
        </p>
    </div>  
@endsection