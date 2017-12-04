<?php

// Create and include a configuration file with the database connection
include('config.php');

// Get a list of books from the database


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BMW Classifieds</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
	<header>
  	<a href="index.html">
    <img src="assets/bmwlogo.png" alt="logo" />
    </a>
    <h5>Click the logo to return home</h5>
  	<h1>Your Cart</h1>
  </header>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="history.html">History</a></li>
      <li><a href="racing.html">Racing</a></li>
      <li><a href="motorcycle.html">Motorcycles</a></li>
      <li><a href="slideshow.html">Slideshow</a></li>
      <li><a href="contact.html">Contact</a></li>
      

      
      
    </ul>
    
  <!-- end .sidebar1 --></div>
    <article class="content">
    <p>Welcome to the BMW Classifieds page, where you can buy and sell all things BMW.</p>
        <p><label for="search">Search:</label>
      <input type="text" name="search" id="search"> &nbsp; &nbsp; &nbsp;
        Add Listing &nbsp; Checkout
        </p>
        
        
        
        
       
    </article>
  



</div>
</body>
</html>
