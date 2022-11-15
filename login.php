<?php 
include 'bootstrapper.php';

if (isset($_SESSION['user_id'])) {
	header('location: '.URLROOT.'/index.php');
}

	?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <style>
	div {text-align: left;}
	body {background-color:pink;}
	</style>
	<div class="container">
	  <h3 class="text-center">W's Todo List App</h3>
	  <form action="controller/users_controller.php" method="POST">
	   <div  class="form-group">
	     <label class="form-label">Username</label>
	     <input type="text" class="form-control" name="username">
	</div>
	<div  class="form-group">
	   <label class="form-label">Password</label>
	   <input type="text" class="form-control" name="password">
	   </div>
	   <button type="submit" name="login" class="btn btn-info w-100 mt-2">Login</button>
	   <div  class="form-group">
	   <input type="checkbox"> Keep me Sign-In
	   </div>
	   <a href="register.php">Create New Account</a>
	   <div>
	   <a href="register.php">Forgot Password</a>
	   
	 </form>
	 </div>
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>