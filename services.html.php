<!DOCTYPE html>
<html>
<head>
  <title>BSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

 <style>
   *{
    font-family: 'Josefin Sans', sans-serif;

   }
    /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;

 </style>

</head>
<body>
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="services.html">Services</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1>Services</h1> 
  <p>Bootstrap is the most popular HTML, CSS...</p> 
</div>


</header>

<section>
  <div class="container">
    <h1 class="text-center text-capitalize mt-5">services</h1>
    <hr class="w-25 mx-auto mb-5 ">

  <div class="row mb-5">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="image/img4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="image/img5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="image/img6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

    </div>
    
  </div>

</div>
</section>

<footer>
  <p class="text-center text-white bg-dark">@copyright MinTech.com 2019</p>
</footer>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
