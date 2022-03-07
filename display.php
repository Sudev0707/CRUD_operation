<?php
include_once 'config.php';
$result = mysqli_query($conn, "SELECT * FROM details");
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title> Show Table Details</title>
</head>

<body>
  <?php
  if (mysqli_num_rows($result) > 0) {
  ?>
    <center>
      <table>

        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Address</th>
          <th colspan="2">Update</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
              <a href="Update.php?id=<?php echo $row['id']; ?>">Update</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
          </tr>
        <?php
          $i++;
        }
        ?>
      </table>
    </center>
  <?php
  } else {
    echo "No result found";
  }
  ?>
</body>

</html>