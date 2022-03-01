<?php
require_once "../employeeManager.php";

// test delete method by accessing an employee in the DB through it's id and deleting it
$employeeManager = new EmployeeManager();
$employeeManager->deleteEmployee(1);


?>