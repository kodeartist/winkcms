@extends('layouts.master')


@section('header')
 <header class="masthead" style="url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>&nbsp;</p>
          <div class="site-heading logo" style="padding:30px;">
            <h2 class="logo">Latest blinks</h2>
            <span>Writing Ink in a blink</span>
          </div>
        </div>
      </div>
    </div>
  </header>

@endsection


@section('content')

@if(!$posts)



@else

      @foreach($posts as $post)
        
        <div class="col-lg-8 col-md-10 mx-auto">
            <hr>
          <div class="post-preview">
            <a href="{{route('blog.show',$post->slug)}}">
              <img class="float-left mr-2" src="https://via.placeholder.com/80" alt="{{$post->title }}">
              <h4>
                {{ $post->title}}
              </h4>
              <!--         
                  <h3 class="post-subtitle">
                    Problems look mighty small from 150 miles up
                  </h3> 
              -->
            </a>
            <small>Posted by
              <a href="#">{{ $post->author->name}}</a>
              on {{ $post->publish_date->toFormattedDateString() }}
             <a 
              class="float-right" 
              href="{{route('blog.show',$post->slug)}}">More &rarr;</a>
            </small>
             
          </div>
           <!-- Pager -->
          <div class="clearfix">

          </div>
        

         
        </div>

      @endforeach

@endif

          


@endsection

