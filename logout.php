<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Tamara home page nu naam
exit;
?>