<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body>
	
		<form method="post" action="add.php">
			<h3>Add Records in Database : </h3>
			Name : 
			<input type="text" name="name">
			<br><br>
			Email :
			<input type="email" name="email">
			<br><br>
			Mobile :
			<input type="text" name="mobile">
			<br><br>
			Address :
			<input type="text" name="address">
			<br><br>
			<input type="submit" name="insert" value="submit">
		</form>

</body>

</html>