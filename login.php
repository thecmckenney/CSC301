<?php

// Create and include a configuration file with the database connection
include('config.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Member Login</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
	<header>
  	<a href="index.html">
    <img src="assets/bmwlogo.png" alt="logo" />
    </a>
    <h5>Click the logo to return home</h5>
  	<h1>Member Login</h1>
  </header>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="history.html">History</a></li>
      <li><a href="racing.html">Racing</a></li>
      <li><a href="motorcycle.html">Motorcycles</a></li>
      <li><a href="slideshow.html">Slideshow</a></li>
        <li><a href="classifieds.php">Classifieds</a></li> 
      <li><a href="contact.html">Contact</a></li>
    </ul>
    
  <!-- end .sidebar1 --></div>
    <article class="content">
       <h1>Login</h1>
		<form name='login' method="POST" action="loginCode.php">
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" value="Log In" />
		</form>
        <br/> <br/>
        
        <h1>Sign Up</h1>
		<form name="signup" method="POST" action="signup.php">
            First Name: &nbsp; <input type="text" name="fname" placeholder="First Name" /><br/><br/>
            Last Name: &nbsp; <input type="text" name="lname" placeholder="Last Name" /><br/><br/>
            Email: &nbsp;<input type="text" name="email" placeholder="Email" /><br/><br/>
			Create User Name: &nbsp;<input type="text" name="username" placeholder="Username" /><br/><br/>
			Create Password: &nbsp;<input type="password" name="password" placeholder="Password"/><br/><br/>
            

			<input type="submit" value="Sign Up" />
		</form>
        
    </article>
  



</div>
</body>
</html>
