<?php
// Check if user is logged in
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // User not logged in, redirect to login page
  header('Location: index.html');
  exit();
}
?>
