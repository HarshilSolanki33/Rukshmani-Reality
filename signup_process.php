<?php
session_start();
require "db.php";

// Inputs
$full_name = trim($_POST['full_name']);
$email = trim($_POST['email']);
$password_raw = trim($_POST['password']);
$phone = trim($_POST['phone']);

$has_error = false;

// REQUIRED VALIDATIONS
if ($full_name === "") {
    $_SESSION['error_name'] = "Please enter your full name.";
    $has_error = true;
}

if ($email === "") {
    $_SESSION['error_email'] = "Please enter your email.";
    $has_error = true;
}

if ($password_raw === "") {
    $_SESSION['error_password'] = "Please enter your password.";
    $has_error = true;
}

if ($phone === "") {
    $_SESSION['error_phone'] = "Please enter your phone number.";
    $has_error = true;
} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    $_SESSION['error_phone_invalid'] = "Phone number must be exactly 10 digits.";
    $has_error = true;
}

// If any error → go back
if ($has_error) {
    header("Location: SignUp.php");
    exit;
}

// Hash Password
$password = password_hash($password_raw, PASSWORD_BCRYPT);

// DUPLICATE EMAIL CHECK
$check_email = pg_query_params(
    $conn,
    'SELECT * FROM "Guest_User_DB".users WHERE email = $1',
    [$email]
);

if (pg_num_rows($check_email) > 0) {
    $_SESSION['error_email'] = "This email is already registered!";
    header("Location: SignUp.php");
    exit;
}

// DUPLICATE PHONE CHECK
$check_phone = pg_query_params(
    $conn,
    'SELECT * FROM "Guest_User_DB".users WHERE phone = $1',
    [$phone]
);

if (pg_num_rows($check_phone) > 0) {
    $_SESSION['error_phone'] = "This phone number is already registered!";
    header("Location: SignUp.php");
    exit;
}

// PROFILE PHOTO UPLOAD
$profile_photo = null;

if (!empty($_FILES['profile_photo']['name'])) {
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) mkdir($target_dir, 0777, true);

    $photo_name = time() . "_" . basename($_FILES['profile_photo']['name']);
    $target_file = $target_dir . $photo_name;

    if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $target_file)) {
        $profile_photo = $photo_name;
    }
}

// INSERT USER
$result = pg_query_params(
    $conn,
    'INSERT INTO "Guest_User_DB".users (full_name, email, password, phone, profile_photo)
     VALUES ($1, $2, $3, $4, $5)',
    [$full_name, $email, $password, $phone, $profile_photo]
);

if (!$result) {
    $_SESSION['error_general'] = "Database Error: " . pg_last_error($conn);
    header("Location: SignUp.php");
    exit;
}

// SUCCESS REDIRECT
$_SESSION['success'] = "Account created successfully!";
header("Location: ../index.php");
exit;

?>