<?php
require_once '../employeeManager.php';

$employeeManager = new EmployeeManager();
$employeeManager->editEmployee("2", "Merradou", "Noureddine", "2020/2/12", "male");

?>