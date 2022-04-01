<?php
  session_start();
  include('connection.php');
  global $conn;
  $username = $_SESSION['username'];
  $result = $conn->query("SELECT * FROM users WHERE email = '$username'");
  $r = mysqli_fetch_assoc($result);
  $id = $r['id'];
  $conn->query("INSERT INTO user_logs SET users_id = $id, is_login = 0, created_at = NOW()");
  unset($_SESSION["username"]);
  header("Location:index.php");
?>
