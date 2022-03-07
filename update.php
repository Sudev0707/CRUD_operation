<?php
include_once 'config.php';

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE details set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', mobile='" . $_POST['mobile'] . "' ,address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Update Successfull";
}
$result = mysqli_query($conn,"SELECT * FROM details WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<form name="update" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="display.php">Check Details</a>
</div>

Username <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>

Name <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>

Email<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>

Mobile<br>
<input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>">
<br>

Address<br>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>