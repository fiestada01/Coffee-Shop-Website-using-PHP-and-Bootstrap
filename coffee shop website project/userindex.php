
<?php
include('connection.php');
session_start();

  global $conn;

  $check_login = $conn->query("SELECT
                            users.*,
                            user_logs.is_login,
                            user_logs.created_at as date_logs
                          FROM users LEFT JOIN user_logs ON users.id = user_logs.users_id
                          ORDER BY user_logs.created_at DESC");
  $cl = mysqli_fetch_assoc($check_login);

  if ($cl['is_login'] == 1) {
    include('userheader.php');
  }else{
    include('header.php');
  }
?>

<?php
include_once 'home.php'
?>

<?php
include_once 'footer.php'
?>
