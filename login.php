<?php
session_start();

$valid_email = "johndoe@gmail.com";
$valid_password = "123456";

$email = $_POST ['email'] ?? '';
$password = $_POST ['paswword'] ?? '';

if ($email === $valid_email && $password === $valid_password){
    $_SESSION ['user'] = $email;
    echo "<h2>Welcome, " . htmlspecialchars($enail) . "!</h2>";
    echo "<p><a href= 'logout.php'>Logout</a></p>";
} else {
    echo "<h2>Login Failed</h2>"
    echo "<p><a href= 'index.html'> Try Again</a></p>";
}
?>