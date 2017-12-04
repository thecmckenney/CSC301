<?php

// Create and include a configuration file with the database connection
include('config.php');
include('functions.php');


$memberid = $member->getId();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];
    
    $sql = file_get_contents('sql/addProduct.sql');
	$params = array(
			'title' => $title,
			'description' => $description,
			'price' => $price,
            'memberid'=>$memberid
    );
	
	$statement = $database->prepare($sql);
    $statement->execute($params);
    
    
	
    $sql = file_get_contents('sql/addPost.sql');
	$params = array(
			'title' => $title,
			'description' => $description,
			'price' => $price,
            'memberid' => $memberid
    );
	
	$statement = $database->prepare($sql);
    $statement->execute($params);
    
    
    header('location: classifieds.php');
    
}
		
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Listing</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
	<header>
  	<a href="index.html">
    <img src="assets/bmwlogo.png" alt="logo" />
    </a>
    <h5>Click the logo to return home</h5>
  	<h1>Add Listing</h1>
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
    
       <form method="POST">
            <h3>Ad Info</h3>
			Ad Title: &nbsp; <input type="text" name="title" placeholder="Ad Title" /> <br/><br/>
           	Price: &nbsp; <input type="text" name="price" placeholder="Price" /> <br/><br/>
            Description: <br/><input type="text" name="description" placeholder="Description"<br/><br/>
            <input type="submit" value="Post Ad" />

		</form>
    
    
    
  



</div>
</body>
</html>
