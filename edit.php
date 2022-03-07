<?php
// including the database connection file
include_once("config.php");

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM details WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $email = $res['email'];
    $mobile = $res['mobile'];
    $address = $res['address'];
}
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Data</title>
</head>

<body>
    <!-- <--<a href="index.php">Home</a>-->
    <h3>Edit Data</h3>
    <br><br>

    <form name="form1" method="post" action="update.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>