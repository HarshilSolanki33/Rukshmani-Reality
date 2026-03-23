<?php

session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

/* Check user exists */
$query = "SELECT * FROM users WHERE email = $1";
$result = pg_query_params($conn, $query, array($email));

/* If user NOT signed up */
if(pg_num_rows($result) == 0){

$_SESSION['login_error'] = "Account not found. Please sign up first.";
header("Location: Login.php");
exit();

}

/* Fetch user data */
$user = pg_fetch_assoc($result);

/* Verify password */
if(password_verify($password, $user['password'])){

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['full_name'];
$_SESSION['user_email'] = $user['email'];

header("Location: dashboard.php");
exit();

}else{

$_SESSION['login_error'] = "Incorrect password";
header("Location: Login.php");
exit();

}
?>