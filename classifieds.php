<?php

// Create and include a configuration file with the database connection
include('config.php');
include('functions.php');



if (isset($_GET['search-term'])){
    if ($term = ''){
        $sql = file_get_contents('sql/getProducts.sql');
        $statement = $database->prepare($sql);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    $term = $_GET['search-term'];
    $products = searchProducts($term, $database);
}
else{
    $sql = file_get_contents('sql/getProducts.sql');
    $statement = $database->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
}



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
  	<h1>BMW Classifieds</h1>
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
    <p>Welcome to the BMW Classifieds page, where you can buy and sell all things BMW.</p>
        <form method="GET">
        <p><label for="search">Search:</label>
          <input type="text" name="search-term"> <input type="submit" value="Search" /></form> &nbsp; &nbsp; &nbsp;
            <a href="add.php">Add Listing </a> &nbsp;
            &nbsp;&nbsp;&nbsp; <a href="logout.php">Logout</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello, <a href="member.php"><?php echo $member->getFName(); ?> </a>
            
            
        </p>
        

        
        <?php foreach($products as $product) : ?>
            <div class="box">
            <h3><?php echo $product['title'] ?> - <?php echo $product['price'] ?></h3>
             <p><?php echo $product['description'] ?></p>   
             </div>   

		<?php endforeach; ?>
        
       
    </article>
  



</div>
</body>
</html>
