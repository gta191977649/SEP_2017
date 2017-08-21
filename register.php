<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<!-- Bootstrap -->
<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Angular JS -->
<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
</head>

<body ng-app="">
<div class="header-masthead">
	<div class="container-fluid">
	<span style="font-size: 50px">Logo</span>
	</div>
</div>
<div class="container">
 <div class="row">
 	<div class="col-md-6" style="margin-right: auto; margin-left: auto;">
  <h1 class="text-center">Regisiter</h1>
  <p class="text-center">Please enter you wished username & password.</p>
  <form action="Assets/php/user_reg.php" method="post" name="regForm"  >

		<div class="alert alert-danger" role="alert" ng-show="pwd!=pwd_again">
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  <span class="sr-only">Error:</span>
		  You entered password does not match each other!
		</div>

		<div class="alert alert-danger" role="alert" ng-show="regForm.mail.$invalid && regForm.mail.$dirty">
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  <span class="sr-only">Error:</span>
		  Please enter vailed email.
		</div>


    <div class="form-group" >

		<label for="usr"><span style="color: red;">*</span>Username:</label>
      <input type="text" class="form-control" name="usr" ng-model="usr" required>
    </div>
    <div class="form-group">
      <label for="pwd"><span style="color: red;">*</span>Password:</label>
      <input type="password" class="form-control" name="pwd" ng-model="pwd" required>
    </div>
    <div class="form-group">
      <label for="pwd"><span style="color: red;">*</span>Password Comform:</label>
      <input type="password" class="form-control" name="pwd_again" ng-model="pwd_again" required>

    </div>
    <div class="form-group">
    	
    	
    	<div class="row">
    	 	<div class="col">
    	 		<label >FirstName:</label>
    	 		<input type="password" class="form-control" name="firtname" ng-model="firtname"  >
			</div>
	   	 	<div class="col">
	   	 		<label >LastName:</label>
    	 		<input type="password" class="form-control" name="lastname" ng-model="lastname">
			</div>		
		</div>
    </div>
    <div class="form-group">
    	<label for="pwd"><span style="color: red;">*</span>Gender:</label>
    	<div class="form-group">
			<label class="radio-inline"><input type="radio" name="gender" value="M">Male</label>
			<label class="radio-inline"><input type="radio" name="gender" value="F">Female</label>
			<label class="radio-inline"><input type="radio" name="gender" value="S" checked="true">Secret</label>
		</div>
    </div>
 	<div class="form-group">
      <label for="pwd"><span style="color: red;">*</span>Email:</label>
      <input type="email" class="form-control" name="mail" ng-model="mail" required>
    </div>
    <input type="hidden" name="type" value="0"/>

	  <p class="text-right"><a href="login.php">Already have a account?</a></p>
    <div class="form-group">
    	<input type="submit" class="btn btn-primary pull-right" value="Register" ng-disabled="regForm.usr.$invalid || regForm.pwd.$invalid || regForm.pwd_again.$invalid || regForm.mail.$invalid || pwd!=pwd_again"/>
    </div>
  </form>
	 </div>
	</div>
</div>
</body>
</html>
