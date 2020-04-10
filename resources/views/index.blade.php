@extends('layouts.master')


@section('header')
 <header class="masthead" style="background: #0d9896 url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading" style="padding:30px;">
            <h2 class="logo">blink</h2>
            <span class="subheading">dont just sit there!</span>
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
                Use blink...
              </h4>
                      
              <p class="post-preview text-center">
                A quick and simple way to keep writing.
              </p> 


               <h4 class="logo text-center">
                blink FAQ
              </h4>

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
          <p>Git clone the project files from here....</p>
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
          Set up basic <a href="#">laravel configurations</a>
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
          Set up basic <a href="#">wink configurations</a>
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


              <!-- -->
                      
              <!-- <p class="post-preview text-center">
                <ul class="text-center">
                  <li>Git clone the project</li>
                  <li>Set up basic laravel configurations</li>
                  <li>Set up basic wink configurations</li>
                </ul>
              </p>  -->

            <br>
            <br>
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
