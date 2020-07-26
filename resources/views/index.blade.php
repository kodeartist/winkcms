@extends('layouts.master')


@section('header')
 <header class="masthead" style="asset('blogtheme/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
              <p>&nbsp;</p>
          <div class="site-heading" style="padding:30px;">
            <h1 class="logo">blink</h1>
            <span class="subheading">dont just sit there, write something!</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop


@section('content')

    <div class="col-lg-8 col-md-10 mx-auto">
          
          <div class="post-preview">
      
              <h4 class="logo text-center">
                Check out a sample to get started
              </h4>
                      
              <p class="post-preview text-center">
               Go to <a href="{{ route('blog.index') }}">sample posts</a>.
              </p> 

              <p>&nbsp;</p>


               <h4 class="logo text-center">
               HOW TO GET STARTED
              </h4>
              <div class="text-center"> A quick and simple guide. </div>

              <!-- -->
  
  <div class="accordion" id="accordionExample">

    <div class="card">
      <div class="card-header bg-transparent" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            How do I get blink?
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <p>Git clone the project files from here <a href="https://github.com/kodeartist/winkcms">LINK</a></p>
        </div>
      </div>
      <br>
    </div>


    <div class="card">
      <div class="card-header bg-transparent" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-default collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            How do I set up blink?
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Set up basic <a href="https://laravel.com/docs/7.x">laravel configurations by installing via composer</a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header bg-transparent" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-default collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How do I configure blink to start posting?
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          Set up basic <a href="https://github.com/writingink/wink">wink configurations</a>
         <p>
           <ul>
            <li>composer require themsaid/wink</li>
            <li>php artisan wink:install</li>
            <li>php artisan storage:link</li>
          </ul>
        </p>
        <p>
          Once you have wink set up, Start posting!<br>
          <b>Note: </b> Make sure to set the tag to <b>Category</b> for the blog part to work.
        </p>
        <p>Happy Blogging!</p>
          
         
         
        </div>
      </div>
    </div>


    <div class="card">
      <div class="card-header bg-transparent" id="headingFour">
        <h2 class="mb-0">
          <button class="btn btn-default collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
            How do I get a quick set up?
          </button>
        </h2>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          Email me and I can do it for you at a minimal fee!
        </div>
      </div>
    </div>


  </div>


            <br>
            <br>
            <br>
               <h4 class="logo text-center">
               Look out soon for a self installer!
               <br>
               <img src="{{asset('blogtheme/img/smile.jpeg') }}" width="20%"/>
              </h4>
             <br>
                <h4 class="logo text-center">
                 Have a blinkable day!
               </h4>
              
  
      
             
          </div>
           <!-- Pager -->
          <div class="clearfix">

          </div>
        

         
        </div>


@endsection
