<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</head>
<body>
        







<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">ANU Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active container">
        <a class="nav-link" href="#">Home</a>
      </li>

      <li class="nav-item container">
        <a class="nav-link" href="#">Meals</a>
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


<div id="background-img"></div>


   <br>
<div class="container">
    

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://img.freepik.com/free-vector/splash-cola-soda-cold-tea-coffee-with-ice-cubes_107791-6379.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pipsi</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://img.freepik.com/free-photo/freshly-italian-pizza-with-mozzarella-cheese-slice-generative-ai_188544-12347.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">pizza</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://img.freepik.com/free-photo/hot-dog-with-lettuce-top-view_23-2148242518.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">hot dog</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://img.freepik.com/free-photo/strawberry-mojito-table_140725-5489.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">fresh ice</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
    

</div>



</body>
</html>
