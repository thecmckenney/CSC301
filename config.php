<?php

// Connecting to the MySQL database
$user = 'mckenneyc2';
$password = 'jl4jIeri';

$database = new PDO('mysql:host=localhost;dbname=db_fall17_mckenneyc2', $user, $password);

function autoloader($class){
	include 'classes/class.' . $class . '.php';
}
spl_autoload_register('autoloader');

session_start();

$current_url = basename($_SERVER['REQUEST_URI']);

if (!isset($_SESSION["memberid"]) && $current_url != 'login.php') {
    header("Location: login.php");
}

// Else if session key customerID is set get $customer from the database
elseif (isset($_SESSION["memberid"])){
    $member = new Member($_SESSION["memberid"],$database);
}