<?php
include_once 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$result = mysqli_query($conn, "UPDATE details SET name='$name',email='$email',mobile='$mobile',address='$address' WHERE id=$id");

header("Location:http://localhost/edit%20and%20update/retrieve.php");
?>
