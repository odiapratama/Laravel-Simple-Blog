@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-1 col-sm-2">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-4 col-sm-2">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}<a></h3>
                        <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Post not found</p>
    @endif
@endsection