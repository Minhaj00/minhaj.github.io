<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">



<style>

	*{
		font-family: 'Josefin Sans', sans-serif;
	}
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</

<!---header--->

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
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/img4.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/img5.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/img6.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


</header>
<!----header end---->

<!---about---->
  
  <section>
  	
  	<div class="container-fluid">

  		   <h1 class="text-center text-capitalize pt-5">about us</h1>
  		   <hr class="w-25 mx-auto pt-5">	
  		
  		<div class="row mb-5">
  			<div class="col-lg-6 col-md-6 col-12">
  				<img src="image/img3.jpg" class="img-fluid">
  			</div>

  			<div class="col-lg-6 col-md-6 col-12">
  				<h1>who am i?</h1>
  				<p>	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  				<button class="btn btn-primary">wanna know me</button>
  			</div>

  		</div>
  		
  	</div>


  </section>



<!---about end--->

<!---services--->

  <div class="container">
   <h1 class="text-center text-capitalize pt-5">services</h1>
   <hr class="mx-auto w-25 pt-5">

   <div class="row text-center mb-5">
   	<div class="col-lg-4 col-md-4 col-12">
   		
      <div class="card" >
  <img class="card-img-top" src="image/img4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

	<div class="col-lg-4 col-md-4 col-12">
   		
      <div class="card" >
  <img class="card-img-top" src="image/img4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

	<div class="col-lg-4 col-md-4 col-12">
   		
      <div class="card" >
  <img class="card-img-top" src="image/img4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
   

   </div>
</div>

<!---services end--->


<!---contact---->

<section class="bg-primary mb-5">
	
   <article>
   	 <div class="text-center text-white py-5">
   	 	<h3 class="display-4">+91 123456789</h3>
   	 	<p>you want best service </p>
   	 	<button class="btn btn-warning">Contact Now</button>
   	 </div>

   </article>

</section>


<!---contact end---->


<!---gallery-->

<section>
	
	<div class="container">
		<h1 class="text-center text-capitalize pt-5">gallery</h1>
		<hr class="mx-auto w-25 pt-5">

     <div class="row mb-5">
     	
     	<div class="col-lg-4 col-md-2 col-12 mb-5">
     		<img src="image/img4.jpg " class="img-fluid">

     	</div>

     	<div class="col-lg-4 col-md-2 col-12 mb-5">
     		<img src="image/img4.jpg " class="img-fluid">

     	</div>

       <div class="col-lg-4 col-md-2 col-12 mb-5">
     		<img src="image/img4.jpg" class="img-fluid">

     	</div>


      <div class="col-lg-4 col-md-2 col-12 mb-5">
     		<img src="image/img4.jpg " class="img-fluid">

     	</div>

      <div class="col-lg-4 col-md-2 col-12 mb-5">
     		<img src="image/img4.jpg " class="img-fluid">

     	</div>

       <div class="col-lg-4 col-md-2 col-12 mb-5">
     		<img src="image/img4.jpg" class="img-fluid">

     	</div>
     



     </div>



	</div>

</section>



<!---gallery end-->

<!--register----->
  <section class="bg-primary mb-5">
  	
    <article>
    	<div class="text-center text-white py-5">
    		<h3 class="display-4 ">Want to join</h3>
    		<p>be a part of our family</p>
    		<button class="btn btn-warning" data-toggle="modal" data-target="#myModal">join now</button>
    	</div>
        
      <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  


    </article>

  </section>




<!--register end----->


<!---contact us--->

<div class="container mb-5">
	<h1 class="text-center text-capitalize pt-5">contact us</h1>
	<hr class="w-25 mx-auto pt-5">

 <div class="mx-auto w-50">
 	
 	<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" autocomplete="off">
  </div>
<div class="form-group">
    <label for="number">Contact No:</label>
    <input type="number" class="form-control" id="number">
  </div>

  <div class="form-group">
    <label for="text">Message:</label>
    <textarea class="form-control"></textarea>
  </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 </div>


</div>



<!---contact us end--->

<!--footer--->

<footer>
	<p class="text-center bg-dark text-white">@copyright MinTechnical.com 2019</p>
</footer>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>