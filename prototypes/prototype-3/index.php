<?php
require_once 'employeeManager.php';

$employeeManager = new EmployeeManager();
$data = $employeeManager->getAllEmployees();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div>
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Date</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $employee){
            ?>

            <tr>
                <td><?= $employee->getFirstName()?></td>
                <td><?= $employee->getLastName()?></td>
                <td><?= $employee->getBirthDate()?></td>
                <td><?= $employee->getGender()?></td>
                <td>
                    <a href="edit.php?id=<?php echo $employee->getId() ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $employee->getId() ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>