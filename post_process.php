<?php
session_start();

$title = $_POST['title'];
$postw = $_POST['postw'];
$postu = $_POST['postu'];
$tags = $_POST['tags'];
$product = $_POST['product'];
$category = $_POST['category'];


$mysqli = new mysqli('localhost', 'root', '', 'bw2');

if ($mysqli->connect_error) {
  die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "INSERT INTO posts (title, product, category, postw, postu, tags, date, verified) VALUES ('$title', '$product', '$category', '$postw', '$postu', '$tags', '', '')";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());

if ($result) {
  echo 'true';
} else {
  echo 'false';
}

?>
