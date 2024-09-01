<?php
// Start the session
session_start();

// Database configuration
$servername = "localhost";
$username = "root"; // Change this if your database username is different
$password = ""; // Add your MySQL password here
$dbname = "mydatabase"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username and password from the form
$user = $_POST['username'];
$pass = $_POST['password'];

// Check if the user exists
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // User exists
    
    header("Location: mainpage.html");
} else {
    // User doesn't exist, redirect to register page
 $_SESSION['username'] = $user;   header("Location: register.html");
}

// if ($conn->query($sql) === TRUE) {
//     header("Location: home.html");
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>


