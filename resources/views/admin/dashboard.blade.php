<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>

<div class='container-fluid'>

<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">ANU Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">

      <li class="nav-item container">
        <a class="nav-link" href="{{ url('/Meals') }}">Meals</a>
      </li>

      <li class="nav-item container">
        <a class="nav-link" href="#">Drinks</a>
      </li>
    </ul>

    @if (Route::has('login'))
               
                    @auth
                    <a href="{{ url('/home') }}" class="nav-item mx-2"> <button type="button" class="btn btn-dark"> Home </button> </a>
                    @else
                        <a href="{{ route('login') }}" class="nav-item mx-2">  <button type="button" class="btn btn-dark"> Log in </button> </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item mx-2"> <button type="button" class="btn btn-dark"> Register </button> </a>
                        @endif
                    @endauth
           
       @endif

  </div>
</nav>
</div>

<div class="row">
    @yield('DynamicContent')
</div>


</div>


</body>
</html>