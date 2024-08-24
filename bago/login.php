<?php
session_start();

$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "TAB"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $conn->real_escape_string($_POST['username']);
$pass = $conn->real_escape_string($_POST['password']);

$sql = "SELECT * FROM users WHERE username='$user' AND password=SHA1('$pass')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

$conn->close();
header("Location: index.html");
?>