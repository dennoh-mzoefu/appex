<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password    = "";
$phoneNumber = "";
// change
$reffered = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'trial');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
    // change
    $reffered = mysqli_real_escape_string($db, $_POST['reffered']);


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (empty($phoneNumber)) {
        array_push($errors, "phoneNumber is required");
    }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE name='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['name'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }


    if (count($errors) == 0) {
        //change 
        $query = "INSERT INTO users (name, email,phoneNumber, password,reffered) 
  			  VALUES('$username', '$email','$phoneNumber', '$password','$reffered')";
        mysqli_query($db, $query);
        $_SESSION['name'] = $username;
        $_SESSION['id'] = 3;
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: dashboard.php');
    }
}
