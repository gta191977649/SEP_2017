<!doctype html>
<html><!-- InstanceBegin template="/Templates/Style.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Make you Full</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="Assets/css/bootstrap.min.css">
<link href="Assets/css/custom.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

</head>

<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
 <div class="container">
  <a class="navbar-brand" href="home.php">SiteName</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item active">
        <a class="nav-link" href="#">My Orders<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    
    <ul class="navbar-nav my-2 my-lg-0">
     
     <?php require("Assets/php/auth.php");
	if(isLog()) { ?>
      <li class="nav-item dropdown">
           
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php 
				echo getName();
			?>
           </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="Assets/php/user_logout.php">Logout</a>
            </div>
      </li>
      
      	<?php
		}
		else
		{
		?>
      	<a class="nav-link" href="login.php">Login</a>
      	<?php  } ?>
    </ul>
   
  </div>
  
  </div>
</nav>
	<!-- InstanceBeginEditable name="MainContext" -->
	    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Assets/img/online-food-delivery.jpg" alt="First slide" style="height: 500px;">
      <div class="container">
            <div class="carousel-caption">
              <h1>Title</h1>
              <p>dioejfoesjfoisjfosejfoesjifefesfse</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Get Start</a></p>
            </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Assets/img/c2_Fotor.jpg" alt="Second slide" style="height: 500px;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Title</h1>
              <p>dioejfoesjfoisjfosejfoesjifefesfse</p>
            </div>
      		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Assets/img/g3_Fotor.png" alt="Third slide" style="height: 500px;">
      <div class="container">
            <div class="carousel-caption">
              <h1>Title</h1>
              <p>dioejfoesjfoisjfosejfoesjifefesfse</p>
            </div>
      		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Assets/img/g1_Fotor.png" alt="Fouth slide" style="height: 500px;">
      <div class="container">
            <div class="carousel-caption">
              <h1>Title</h1>
              <p>dioejfoesjfoisjfosejfoesjifefesfse</p>
            </div>
      		</div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="Assets/img/rise_Fotor.jpg" alt="Fifth slide" style="height: 500px;">
      <div class="container">
            <div class="carousel-caption">
              <h1>Title</h1>
              <p>dioejfoesjfoisjfosejfoesjifefesfse</p>
            </div>
      		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
	<div class="container-fluid">
	

	
		
			<div class="container" style="margin-top: 35px;">
	<div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Diofhoifesofhseo</h1>
        <p>We develop new ideas and technologies to optimise food production systems, with a focus on nutrition. As these systems are affected by economical, social and environmental constraints, we explore a balance all three. </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">start &raquo;</a></p>
      </div>
	</div>
	


	
   
<hr>
	<!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Shop owner</h2>
          <p>if you are shop owner, you must want you bussiness to show an uptrend.To register for the store and accept more guests </p>
          <p><a class="btn btn-secondary" href="#" role="button">Register &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>customer</h2>
          <p>As a diner, at home must not go out to rest it. Register our account and start your bookimh tour,  </p>
          <p><a class="btn btn-secondary" href="register.php" role="button">Register &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Delivery man</h2>
          <p> become a good delivery. we need you, you can find a good job.and get a hight pay. Register in the system, you can find a good job.</p>
          <p><a class="btn btn-secondary" href="#" role="button">Register&raquo;</a></p>
        </div>
      </div>
	
		
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
	<!-- InstanceEndEditable -->

<footer class="text-muted ">
      <div class="container">
        
        <div class="row">
        <div class="col-md-4">
          <h5>Help</h5>
          <ul class="">
      			<li><a href="#">A</a></li>
          		<li><a href="#">B</a></li>
			   	<li><a href="#">C</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Business</h5> 
           <ul>
   				<li><a href="#">A</a></li>
          		<li><a href="#">B</a></li>
			   	<li><a href="#">C</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Contract</h5>
           <ul>
			   	<li><a href="#">A</a></li>
          		<li><a href="#">d</a></li>
			   	<li><a href="#">C</a></li>
          </ul>
        </div>
        
      </div>
      </footer>


</body>
<!-- InstanceEnd --></html>
