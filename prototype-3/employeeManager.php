<?php
require_once 'employee.php';

class EmployeeManager { 
    private $connection = null;

    public function getConnection(){
        if (is_null($this->connection)){
            $this->connection = mysqli_connect('localhost', 'test', 'test123', 'demo');

            if(!$this->connection){
                $message = 'Connection failed ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
      return $this->connection;
    }


}


?>