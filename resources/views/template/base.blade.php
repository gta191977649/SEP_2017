<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Uitiled Site</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link rel="stylesheet" href="{{ asset('res/css/bootstrap.min.css') }}">
<link href="{{ asset('res/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
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
     
    <!--
    <li class="nav-item dropdown">
           
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="../Assets/php/user_logout.php">Logout</a>
        </div>
    </li>
    -->
    <a class="nav-link" href="{{ route('login') }}">Login</a>
      
    </ul>
   
  </div>
  
  </div>
</nav>
	<!-- TemplateBeginEditable name="MainContext" -->
	<div class="container-fluid">
		<div class="container">
             @yield('body')
        </div>
	</div>
	<!-- TemplateEndEditable -->

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
</html>
