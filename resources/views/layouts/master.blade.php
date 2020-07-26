<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="description" content="">

  <meta name="author" content="">

  <title>blink</title>

  <!-- Bootstrap core CSS -->
  <link 
      href="{{ asset('blogtheme/vendor/bootstrap/css/bootstrap.min.css') }}" 
      rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link 
      href="{{ asset('blogtheme/vendor/fontawesome-free/css/all.min.css') }}" 
      rel="stylesheet" 
      type="text/css">

  <link 
      href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' 
      rel='stylesheet' 
      type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Muli&family=Poppins:wght@200&display=swap" rel="stylesheet"> 

  <link 
      href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' 
      rel='stylesheet' 
      type='text/css'>

  <!-- Custom styles for this template -->
  <link 
      href="{{ asset('blogtheme/css/clean-blog.css') }}" 
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet"> 
</head>

<body>

  <!-- Navigation -->
  @include('elements.nav')

  <!-- Page Header -->
 @yield('header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">

      @yield('content')


    </div>
  </div>

  <hr>

  <!-- Footer -->
  
  @include('elements.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('blogtheme/vendor/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('blogtheme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('blogtheme/js/clean-blog.min.js') }}"></script>

</body>

</html>