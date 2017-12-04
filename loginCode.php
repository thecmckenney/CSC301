<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get username and password from the form as variables
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query records that have usernames and passwords that match those in the customers table
        $sql = file_get_contents('sql/attemptLogin.sql');
        $params = array(
            'username' => $username,
            'password' =>$password

        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        // If $users is not empty
        if(!empty($users)) {
            // Set $user equal to the first result of $users
            $user = $users[0];

            // Set a session variable with a key of customerID equal to the customerID returned
            $_SESSION['memberid'] = $user['memberid'];

            // Redirect to the index.php file
            header('location: classifieds.php');
        }

    }
