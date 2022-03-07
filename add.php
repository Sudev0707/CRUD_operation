<?php
include_once 'config.php';
if(isset($_POST['insert']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	 $address = $_POST['address'];
	 $sql = "INSERT INTO details (name,email,mobile,address)
	 VALUES ('$name','$email','$mobile','$address')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record addes successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>