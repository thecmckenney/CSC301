<?php 

include('config.php');
include('functions.php');

$memberid = get('memberid');
$temp = get('title');

$title = ''.$temp.'';

$sql = file_get_contents('sql/getProductId.sql');
	$params = array(
		'memberid' => $memberid,
        'title' => $title
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$productids = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $pid = $productids[0];

    $productid = $pid['productid'];

    echo $productid;

    removePost($memberid, $productid, $database);

    header('location: classifieds.php');

    



