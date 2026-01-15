
<?php
session_start();

// initializing variables
$admin_name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'manna');

// REGISTER admin_
if (isset($_POST['reg_admin'])) {
  // receive all input values from the form
  $admin_name = mysqli_real_escape_string($db, $_POST['admin_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($admin_name)) { array_push($errors, "admin_name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a admin_ does not already exist with the same admin_name and/or email
  $admin_check_query = "SELECT * FROM admins WHERE admin_name='$admin_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $admin_check_query);
  $admin = mysqli_fetch_assoc($result);
  
  if ($admin) { // if admin_ exists
    if ($admin['admin_name'] === $admin_name) {
      array_push($errors, "admin_name already exists");
    }

    if ($admin['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register admin_ if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admins (admin_name, email, password) 
  			  VALUES('$admin_name', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['admin_name'] = $admin_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: adindex.php');
  }
}

// LOGIN admin_
if (isset($_POST['admin'])) {
  echo "hi";
  $admin_name = mysqli_real_escape_string($db, $_POST['admin_name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($admin_name)) {
  	array_push($errors, "admin_name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admins WHERE admin_name='$admin_name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_name'] = $admin_name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: adindex.php');
  	}else {
  		array_push($errors, "Wrong admin_name/password combination");
  	}
  }
}

?>