<form action="verify_otp_process.php" method="POST">

<label>Enter OTP</label>

<input type="text" name="otp" required
class="w-full p-3 border rounded-lg">

<button class="w-full py-3 bg-[#b9874b] text-white rounded-lg">

Verify OTP

</button>

</form>
<?php
session_start();

$entered_otp = $_POST['otp'];

if($entered_otp == $_SESSION['otp']){

header("Location: reset_password.php");

}else{

echo "<script>alert('Invalid OTP');window.location='verify_otp.php';</script>";

}
?>