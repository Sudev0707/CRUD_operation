<?php
$conn=mysqli_connect("localhost","root"," ","mydb")or die("connection failed");
$sql= "SELECT* FROM details ORDER by id DESC";
$result= mysqli_query($conn, $sql) or die("query failed");

if(mysqli_num_rows($result)>0)
{
    <table>
    <tbody>
        <?php while($row= mysqli_fetch_assoc($result)) {?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['address']; ?></td>

            <td><a href="edit.php">Edit</a>
                <a href="delete.php">Edit</a></</td>            
            </tr>
            <?php}?>
    </tbody>
    </table>
    <?php }
    else{
        echo "no record found";
    }
    

?>