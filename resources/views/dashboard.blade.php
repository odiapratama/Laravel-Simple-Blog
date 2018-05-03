@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <ul class="nav navbar-nav">
                            <div>
                                <li><h2>Create your Creative Blog</h2></li>
                            </div>
                            <li><a href="/posts/create" class="btn btn-primary">Create Post</a></li>
                        </ul>
                    </div>
                    @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th class="text-center"><h2>Your Post List</h2></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/edit" class="btn btn-default">Edit Post</a></th>
                                    <th>{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You Have No Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
