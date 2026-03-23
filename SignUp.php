<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up | Rukmani Realty</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assets/SignUp.css">
</head>

<body>
<?php
session_start();
if (!empty(
    
    
    
    
    $_SESSION['error']
)) {
    echo '<div style="color:#b00;background:#fdd;padding:10px;text-align:center;">' . htmlspecialchars($_SESSION['error']) . '</div>';
    unset($_SESSION['error']);
}
if (!empty($_SESSION['success'])) {
    echo '<div style="color:#080;background:#dfd;padding:10px;text-align:center;">' . htmlspecialchars($_SESSION['success']) . '</div>';
    unset($_SESSION['success']);
}

?>
<div class="overlay" id="overlay">
    <div class="glow"></div>
    <div class="glow glow2"></div>
    <div class="glow glow3"></div>

   <div class="popup">

    <!-- CLOSE BUTTON (move here) -->
    <button class="close-btn" onclick="closePopup()">&times;</button>

    <!-- Left Form Side -->
    <div class="form-box">
        <img src="../Guest Side/Gallery/Realty Logo.png" alt="Rukmani Realty" class="logo">

        <h2 class="form-title u-underline">Create Account</h2>
        <p class="subtitle">Join Rukmani Realty and list your property easily</p>

       

<form action="signup_process.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

    <!-- Full Name -->
    <div class="input-group">
        <label>Full Name</label>
        <input type="text" name="full_name" placeholder="Enter your name" >

        <!-- Full Name Error -->
        <p class="error">
            <?php 
            if(isset($_SESSION['error_name'])){ 
                echo $_SESSION['error_name']; 
                unset($_SESSION['error_name']); 
            } ?>
        </p>
    </div>

    <!-- Email -->
    <div class="input-group">
        <label>Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter email" >

        <!-- Email Error -->
        <p class="error">
            <?php 
            if(isset($_SESSION['error_email'])){ 
                echo $_SESSION['error_email']; 
                unset($_SESSION['error_email']); 
            } ?>
        </p>
    </div>

    <!-- Password -->
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Create Password">

        <!-- Password Error -->
        <p class="error">
            <?php 
            if(isset($_SESSION['error_password'])){ 
                echo $_SESSION['error_password']; 
                unset($_SESSION['error_password']); 
            } ?>
        </p>
    </div>

    <!-- Profile Photo -->
    <div class="input-group">
        <label>Profile Photo</label>
        <input type="file" name="profile_photo" accept="image/*">
    </div>

    <!-- Phone -->
    <div class="input-group">
        <label>Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter phone number" >

        <!-- Phone Error -->
        <p class="error">
            <?php 
            if(isset($_SESSION['error_phone'])){ 
                echo $_SESSION['error_phone']; 
                unset($_SESSION['error_phone']); 
            } 

            if(isset($_SESSION['error_phone_invalid'])){ 
                echo $_SESSION['error_phone_invalid']; 
                unset($_SESSION['error_phone_invalid']); 
            } ?>
        </p>
    </div>

    <button type="submit" class="btn">Create Account</button>

    <p class="login-link">Already have an account? <a href="Login.php">Login</a></p>
</form>




        </div>

        <!-- Right Social Side -->
        <div class="social-section">
    <h3>Or continue with</h3>

    <a href="google-login.php" class="social-btn google-btn">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" class="social-icon">
        Continue with Google
    </a>

   

    <p>Fast, secure sign up</p>
</div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="Assets/SignUp.js"></script>
<script src="Assets/Underline.js"></script>

</body>
</html>
