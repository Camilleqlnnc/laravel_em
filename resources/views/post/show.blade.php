@extends('layouts.admin')
@section('single')
  <h1>{!! $post->title !!}</h1>
  <div class="author">{!! $post->author !!}</div>
  <div class="content">
      <p>
          {!! $post->content !!}
      </p>
  </div>
  <div class="category">{!! $post->category->title !!}</div>
@stop