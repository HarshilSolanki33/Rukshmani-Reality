<?php
$host = "localhost";
$port = "5432";
$dbname = "postgres";   // <-- your actual database
$user = "postgres";     // your username
$password = "Heet@123"; // your password

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed.");
}

// SCHEMA SET (IMPORTANT – case-sensitive)
pg_query($conn, 'SET search_path TO "Guest_User_DB", public;');
?>
