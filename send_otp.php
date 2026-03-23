<?php
session_start();
include "db.php";

$phone = $_POST['phone'];

$query = "SELECT * FROM Guest_User_DB.users WHERE phone=$1";
$result = pg_query_params($conn,$query,array($phone));

if(pg_num_rows($result) == 1){

$otp = rand(100000,999999);

$_SESSION['otp'] = $otp;
$_SESSION['phone'] = $phone;

echo "OTP: ".$otp; // testing

header("Location: verify_otp.php");

}else{

echo "<script>alert('Phone number not registered');window.location='forgot_password.php';</script>";

}
?>