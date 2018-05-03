@extends('layouts.app')

@section('content')
    <a href="\posts" class="btn btn-default btn-md">Go Back</a>
    <h3>{{$post->title}}</h3>
    <hr><div>
        {!!$post->body!!}
        <div>
            <img style="width:20%" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <small>Written on {{$post->created_at}}</small>
    </div></hr>
    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <hr><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit<a></hr>
            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection