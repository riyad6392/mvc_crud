<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <?php include('crud.php');?>
<h1> CRUD APPLICATION IN PHP</h1>

 <a href="create_data.php"> <button>CREATE!</button></a>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>ID__NO</th>
            <th>&ensp;NAME</th>
            <th>&ensp;designation</th>
            <th>&ensp;email</th>
            <th>&ensp;address</th>
            <th>&ensp;salary</th>
            <th>&ensp;status</th>
            <th>&ensp;Action</th>

        </tr>
    </thead>
    <tbody>
        <?php 
         $query = "select * from `employee`";
         $result = mysqli_query($connection, $query);

         if(!$result)
         {
            die("query faild".mysqli_error());
         }
         else
         {
            //print_r($result);

            while ($row=mysqli_fetch_assoc($result)) {
                $db_id=$row['id'];
                ?>
         <tr>
            <td><?php echo $row['id'];?></td>
            <td>&ensp;<?php echo $row['name'];?></td>
            <td>&ensp;<?php echo $row['designation'];?></td>
            <td>&ensp;<?php echo $row['email'];?></td>
            <td>&ensp;<?php echo $row['address'];?></td>
            <td>&ensp;<?php echo $row['salary'];?></td>
            <td>&ensp;<?php echo $row['status'];?></td>

            <td> <a href="single_data.php?edit_id=<?php echo $db_id;?>">Edit</a> || <a href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
        </tr>
                <?php
            }

         

 



         }

        ?>
    </tbody>
</table>
</body>
</html>