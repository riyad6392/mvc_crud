<?php
require_once 'CrudController.php';

// Database configuration
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "employee_crud");

$model = new CrudModel(HOSTNAME, USERNAME, PASSWORD, DATABASE);
$controller = new CrudController($model);
$result = $controller->getAllEmployees();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
</head>
<body>
    <h1>CRUD APPLICATION IN PHP</h1>
    <a href="create_data.php"><button>CREATE!</button></a>

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
            while ($row = $result->fetch_assoc()) {
                $db_id = $row['id'];
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>&ensp;<?php echo $row['name']; ?></td>
                <td>&ensp;<?php echo $row['designation']; ?></td>
                <td>&ensp;<?php echo $row['email']; ?></td>
                <td>&ensp;<?php echo $row['address']; ?></td>
                <td>&ensp;<?php echo $row['salary']; ?></td>
                <td>&ensp;<?php echo $row['status']; ?></td>
                <td>
                    <a href="single_data.php?edit_id=<?php echo $db_id; ?>">Edit</a> || 
                    <a href="delete.php?id=<?php echo $db_id; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>