<?php
// Perform login validation here
// Retrieve username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Check username and password against database or other storage
if ($username === 'admin' && $password === 'password') {
  // Successful login
  // Set session variables or cookies for authenticated user
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['loggedin'] = true;
  
  // Redirect to task management page
  header('Location: task.php');
  exit();
} else {
  // Invalid login
  // Redirect back to login page with error message
  header('Location: index.html?error=1');
  exit();
}
?>
