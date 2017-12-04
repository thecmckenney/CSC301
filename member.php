<?php 
include('config.php');
include('functions.php');



$sql = file_get_contents('sql/getPosts.sql');
$params = array(
	'memberid' => $member->getId()
);
$statement = $database->prepare($sql);
$statement->execute($params);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Profile</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
	<header>
  	<a href="index.html">
    <img src="assets/bmwlogo.png" alt="logo" />
    </a>
    <h5>Click the logo to return home</h5>
  	<h1>Your Profile</h1>
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
       <h2>Your Posts</h2>
        <?php foreach($posts as $post) : ?>
            <div class="box">
            <h3><?php echo $post['title'] ?> - <?php echo $post['price'] ?></h3>
             <p><?php echo $post['description'] ?></p>   
                <a href="delete.php?memberid=<?php echo $member->getId(); ?>&title=<?php echo $post['title'] ?>">Delete Post</a>
             
        </div>   

		<?php endforeach; ?>
    </article>
  

    

</div>
</body>
</html>
