<?php

// Create and include a configuration file with the database connection
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = file_get_contents('sql/addMember.sql');
        $params = array(
                'fname' => $fname,
                'lname' => $lname,
                'email' => $email,
                'username' => $username,
                'password' => $password

        );

        $statement = $database->prepare($sql);
        $statement->execute($params);


    }