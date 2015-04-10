@extends('layouts.admin')
@section('nav')
    @parent
    <a href="{{url('post/create')}}">Ajouter un post</a>
@stop
@section('content')
    <div class="col-lg-12">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Published at</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($posts as $post)
                    <td>
                        <a href="{{url('post/'.$post->id)}}">{{$post->title}}</a>
                    </td>
                    <td>
                        {!!$post->author!!}
                    </td>
                    <td>
                        {!!$post->content!!}
                    </td>
                    <td>
                        {!!$post->status!!}
                    </td>
                    <td>
                        {!!$post->category['title']!!}
                    </td>
                    <td>
                        {!!$post->published_at!!}
                    </td>
                    <td>
                        <a href="{{url('post/'.$post->id.'/edit')}}" class="btn btn-success">edit</a>
                    </td>
                    {!! Form::open(['url'=>'post/'.$post->id,'method'=>'DELETE' ]) !!}
                    <td>
                       <div class="form-group">
                            {!! Form::submit('delete', ['class'=>'btn btn-warning btn-confirm']) !!}
                        </div>
                    </td>
                    {!! Form::close() !!}
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@stop

