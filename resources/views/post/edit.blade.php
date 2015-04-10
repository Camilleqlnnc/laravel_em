@extends('layouts.admin')
@section('edit')

    {!! Form::open(['url'=>'post/'.$post->id,'method'=>'PUT', 'files'=>true ]) !!}

    <div class="form-group {{$errors->has('title')? 'has-error' : '' }}">
        {!! Form::label('title', 'Title:', ['for'=> 'title'] ) !!}<br>
        {!! Form::text('title',old('title'), ['class'=>'form-control', 'id' => 'Title', 'Value'=>$post->title]) !!}
        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{$errors->has('author')? 'has-error' : '' }}">
        {!! Form::label('author', 'Author:', ['for'=> 'Author'] ) !!}<br>
        {!! Form::text('author', old('author'), ['class'=>'form-control', 'id' => 'Author', 'Value'=>$post->author]) !!}
        {!! $errors->first('author', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group {{$errors->has('content')? 'has-error' : '' }}">
        {!! Form::label('content', 'Content:' ) !!}<br>
        {!! Form::textarea('content', $post->content, ['id' => 'editor']) !!}
        {{ $errors->first('content', '<span class="help-block">:message</span>') }}
    </div>

    <div class="form-group {{$errors->has('status')? 'has-error' : '' }}">
        {!! Form::label('status', 'Status:' ) !!}<br>
        {!! Form::select('status',['publish' =>'publié', 'unpublish'=>'non publié'], old('status')) !!}
        {{ $errors->first('status', '<span class="help-block">:message</span>') }}
    </div>

    <div class="form-group {{$errors->has('category')? 'has-error' : '' }}">
        {!! Form::label('category_id', 'Category:' ) !!}<br>
        {!! Form::select('category_id',[1 =>'voyage', 2=>'musique'], $post->category_id) !!}
        {{ $errors->first('category_id', '<span class="help-block">:message</span>') }}
    </div>

    <div class="form-group {{$errors->has('published_at')? 'has-error' : '' }}">
        {!! Form::label('published_at', 'Published at:' ) !!}<br>
        {!! Form::date('published_at',$post->published_at, old('published_at')) !!}
        {{ $errors->first('published_at', '<span class="help-block">:message</span>') }}
    </div>

    <div class="form-group">
        {!! Form::submit('Click Me!', ['class'=>'btn']) !!}
    </div>

    {!! Form::close() !!}

@stop

@section('script')
    <script src="{{url('assets/js/ckeditor/ckeditor.js')}}"></script>

    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.config.removePlugins = 'about';
    </script>
@stop