<?php
session_start();
require 'db.php';

// JSON data parse karva mate (Mobile/Desktop banne mate)
$data = json_decode(file_get_contents("php://input"), true);

// Token check (Credential name thi aavshe)
$token = isset($data['credential']) ? $data['credential'] : (isset($data['google_token']) ? $data['google_token'] : null);

if ($token) {
    header('Content-Type: application/json');
    
    // Google JWT Token Decode (Mobile compatible logic)
    $parts = explode('.', $token);
    if(count($parts) < 2) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid Token']);
        exit;
    }
    
    // Base64 URL safe decode
    $payload = str_replace(['-', '_'], ['+', '/'], $parts[1]);
    $user_data = json_decode(base64_decode($payload), true);

    if ($user_data) {
        $g_id = pg_escape_string($conn, $user_data['sub']);
        $g_name = pg_escape_string($conn, $user_data['name']);
        $g_email = pg_escape_string($conn, $user_data['email']);
        $g_picture = pg_escape_string($conn, $user_data['picture']);

        // Check if user exists
        $check_res = pg_query($conn, "SELECT * FROM \"Guest_User_DB\".users WHERE email = '$g_email'");
        
        if (pg_num_rows($check_res) == 0) {
            // New Signup
            pg_query($conn, "INSERT INTO \"Guest_User_DB\".users (name, email, profile_photo, google_id) VALUES ('$g_name', '$g_email', '$g_picture', '$g_id')");
        }

        $_SESSION['user_id'] = $g_email;
        $_SESSION['user_name'] = $g_name;
        
        echo json_encode(['status' => 'success', 'redirect' => 'index.php']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to decode user data']);
    }
    exit();
}

// --- 2. MANUAL SIGNUP ---
if (isset($_POST['btn_signup'])) {
    $name = pg_escape_string($conn, $_POST['name']);
    $email = pg_escape_string($conn, $_POST['email']);
    $phone = pg_escape_string($conn, $_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Email Check
    $check_email = pg_query($conn, "SELECT email FROM \"Guest_User_DB\".users WHERE email='$email'");
    
    if (pg_num_rows($check_email) > 0) {
        $_SESSION['msg_title'] = "Error!";
        $_SESSION['msg_text'] = "Email already registered.";
        $_SESSION['msg_type'] = "error";
        header("Location: signup.php");
        exit();
    }

    // Photo vagar ni Simple Insert Query
    $query = "INSERT INTO \"Guest_User_DB\".users (name, email, phone, password) 
              VALUES ('$name', '$email', '$phone', '$password')";
    
    $result = pg_query($conn, $query);

    if ($result) {
        $_SESSION['user_id'] = $email;
        $_SESSION['msg_title'] = "Success!";
        $_SESSION['msg_text'] = "Account created successfully!";
        $_SESSION['msg_type'] = "success";
        header("Location: signup.php");
    } else {
        die("Error: " . pg_last_error($conn));
    }
    exit();
}







// --- 3. MANUAL LOGIN LOGIC ---
if (isset($_POST['btn_login'])) {
    $email = pg_escape_string($conn, $_POST['login_email']);
    $password = $_POST['login_password'];

    // User check karo
    $query = "SELECT * FROM \"Guest_User_DB\".users WHERE email = '$email'";
    $result = pg_query($conn, $query);

    if (pg_num_rows($result) > 0) {
        $user = pg_fetch_assoc($result);
        
        // Password verify karo (Bcrypt check)
        if (password_verify($password, $user['password'])) {
            // Login Success
            $_SESSION['user_id'] = $user['email'];
            $_SESSION['user_name'] = $user['name'];
            
            header("Location: index.php"); // Success hoi to home page
            exit();
        } else {
            // Wrong Password
            $_SESSION['msg_title'] = "Oops!";
            $_SESSION['msg_text'] = "Invalid password. Please try again.";
            $_SESSION['msg_type'] = "error";
            header("Location: login.php");
        }
    } else {
        // User not found
        $_SESSION['msg_title'] = "Account Not Found";
        $_SESSION['msg_text'] = "Aa email sathe koi account nathi. Pehla Sign Up karo.";
        $_SESSION['msg_type'] = "warning";
        header("Location: login.php");
    }
    exit();
}
?>