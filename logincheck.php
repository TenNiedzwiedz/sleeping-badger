<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = new mysqli('localhost', 'root', '', 'bw2');

if ($mysqli->connect_error) {
  die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM users WHERE login='$username'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {
  if (password_verify($password, $row['password'])) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['login'] = $row['login'];
    echo 'true';
  } else {
    echo 'false';
  }
} else {
  echo 'false';
}

?>
