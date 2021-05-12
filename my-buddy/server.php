<?php
session_start();

// initializing variables
$FirstName = "";
$LastName    = "";
$email    = "";
$password    = "";
$number    = "";
$address    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Mathscience');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $FirstName = mysqli_real_escape_string($db, $_POST['First Name']);
  $LastName = mysqli_real_escape_string($db, $_POST['Last Name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
   $number = mysqli_real_escape_string($db, $_POST['number']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($FirstName)) { array_push($errors, "First Name is required"); }
  if (empty($LastName)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }

  if (empty($password)) { array_push($errors, "password is required"); }

  if (empty($number)) { array_push($errors, "number is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($email) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (FirstName, LastName, email, password, number, address ) 
  			  VALUES('$FirstName', '$LastName', '$email', '$password',  '$number', '$address')";
  	mysqli_query($db, $query);
	  $_SESSION['First Name'] = $FirstName;
	  $_SESSION['success'] = "Welcome";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['First name'] = $FirstName;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email or password");
  	}
  }
}
