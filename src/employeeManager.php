<?php
    include 'employee.php';

    class EmployeeManager {
        public $Connection = null;

        public function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'realisation');

                if($this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            }
            return $this->Connection;
        }
    }
?>