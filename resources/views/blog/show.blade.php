@extends('layouts.master')


@section('header')
 <header class="masthead" style="background: #0d9896 url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading" style="padding:30px;">
            <h2 class="logo">{{ $post->title }}</h2>
            <span class="subheading">Written by: {{$post->author->name}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop


@section('content')

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Published on: {{ $post->publish_date->toFormattedDateString() }}</small>

          {!! $post->body !!}


          <small>Published by: {{ $post->author->name }}</small>

           <div class="clearfix">
           <a 
              class="btn btn-default btn-sm float-right" 
              href="{{route('blog.index')}}">&larr; Back </a>

          </div>
        </div>
      </div>
    </div>


@endsection
