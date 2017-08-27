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

    
	<div class="container-fluid">
	
		<div class="container" style="margin-top: 35px;">
				
				<div class="row">
			
			
		<div class="col-md-10 text-center" style="margin-left: auto; margin-right: auto; margin-top: 100px; margin-bottom: 120px;">
		
				<h1 class="text-center">XXXXXX</h1>
				<form style="margin-top: 50px; margin-left: 20px; margin-right: 20px; ">
				 <div class="row">
        <div class="col-md-2" style="margin: 0px; padding: 0px; margin-top: 5px;">
         	  <select class="form-control">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			  </select>
        </div>
        <div class="col-md-8" style="margin: 0px; padding: 0px; margin-top: 5px;">
         	<input class="form-control" />
        </div>
        <div class="col-md-2" style="margin: 0px; padding: 0px; margin-top: 5px;">
         	<button class="btn btn-primary" style="width: 100%;" type="submit">Search</button>
          
        </div>
        
      </div>
					
				</form>
		
			</div>
		</div>
		<div class="col-md-10 text-center" style="margin-left: auto; margin-right: auto; ">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
            </p>
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
