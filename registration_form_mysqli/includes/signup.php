<?php
include_once 'connect_db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];

$sql = "INSERT INTO users (Firstname, Lastname, Email, Password, Gender, Birth) VALUES ('$first', '$last', '$email', '$pwd', '$gender','$birth')";
mysqli_query($conn, $sql);

header("location: ../view.php?signup=sucess");
