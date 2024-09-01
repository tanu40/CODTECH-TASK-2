<?php
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

// Insert the new user into the database
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    header("Location: home.html");
    try {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $conn->query($sql);
        echo "Registration successful!";
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() === 1062) { // Error code for duplicate entry
            echo "Username already taken, please choose a different one.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

