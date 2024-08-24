<?php
// Define the default password
define('DEFAULT_PASSWORD', 'ken');

// Get the password from the form submission
$input_password = $_POST['password'];

// Check if the input password matches the default password
if ($input_password === DEFAULT_PASSWORD) {
    // Password is correct, redirect to the protected page
    header("Location: admin.php");
    exit();
} else {
    // Password is incorrect, show an error message
    echo "Invalid password. Please";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><a href="index.php">TRY AGAIN</a></p>
</body>
</html>