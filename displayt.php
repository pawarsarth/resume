<?php


$A = mysqli_connect("localhost", "root", "", "ams");
if ($A) {
   // echo "connection successful";
} else {
//echo "connection failed";
}

$q="SELECT * FROM `st3`;";

$res=mysqli_query($A,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="2">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>branch</th>
            <th>per</th>
            <th>edit</th>
            <th>delete</th>
            <th>print</th>
            <th>insert</th>
        </thead>

        <tbody>
            <?php    
            while($row=mysqli_fetch_assoc($res))
            {
            ?>
            <tr>
                <td><?php  echo $row['id'] ?></td>
                <td><?php  echo $row['name'] ?></td>
                <td><?php  echo $row['branch'] ?></td>
                <td><?php  echo $row['per'] ?></td>
                <td>
                <a href="update.php?rn=<?php echo $row['id'];?> "target="_blank">update</a>

                </td>
                <td>
                    <a href="del.php?rn=<?php echo $row['id'];?> " target="_blank ">delete</a>
                </td>
                
                <td><a href="newpr.php?rn= <?php echo $row['id'];?> "target="_blank">print</a>

                <!-- <br><a href="cerred1.php?rn= <?php echo $row['id'];?> "target="_blank"> red print </a>
            <br><a href="cergreen.php?rn= <?php echo $row['id'];?> "target="_blank"> green print</a>
           // change color of certifcate using link and now we are using radion buttton-->
            </td>

            <td> <a href="inside1.php?rn=<?php echo $row['id'];?>"><input type="button" value="click here"></a></td>
            
            <?php  
            }
            ?>
        </tbody>

    </table>


</body>
</html>