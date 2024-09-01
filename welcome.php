<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: home.html");
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>
