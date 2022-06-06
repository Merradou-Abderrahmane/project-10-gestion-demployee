<?php 

class MySqlConnection {
    private $host;
    private $username;
    private $password;
    private $databaseName;

    protected function getConnection(){
        $this->host = "localhost";
        $this->username = "test";
        $this->password = "test123";
        $this->databaseName = "realisation";

        $connection = new mysqli($this->host , $this->username , $this-> password , $this->databaseName);
        return $connection;
    }
}



//  class db {
//     private $Connection = null;
//     private function getConnection(){
//             if(is_null($this->Connection)){
//                 $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'realisation');

//                 if(!$this->Connection){
//                     $message = 'Connection Error: ' .mysqli_connect_error();
//                     throw new Exception($message);
//                 }
//             }
//             return $this->Connection;
//         }

// }

