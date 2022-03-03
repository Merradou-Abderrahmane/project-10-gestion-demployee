<?php
require_once 'employee.php';

class EmployeeManager { 
    
    public function insertEmployee($employee){
        $getJson = file_get_contents('employees.json');
        $jsonArray = json_decode($getJson);

        $employeeData = array(
            'id'=> $employee->getId(),
            'firstName' => $employee->getFirstName(),
            'lastName' => $employee->getLastName(),
            'birthDate' => $employee->getBirthDate(),
            'gender' => $employee->getGender(),
        );

        array_push($jsonArray, $employeeData);
        file_put_contents('employees.json', json_encode($jsonArray));
    }

    public function getAllEmployees(){
        $file = file_get_contents('employees.json');
        $employee_data = json_decode($file);
        $employeeArray = array();
        foreach($employee_data as $data){
            $employee = new Employee();
            $employee->setId($data->id);
            $employee->setFirstName($data->firstName);
            $employee->setLastName($data->lastName);
            $employee->setBirthDate($data->birthDate);
            $employee->setGender($data->gender);

            array_push($employeeArray, $employee);
        }

        return $employeeArray;
    }

    public function deleteEmployee($id){

        $fileJson = file_get_contents('employees.json');
        $dataJson = json_decode($fileJson);
        for($i=0; $i<count($dataJson); $i++){
            if($id == $dataJson[$i]->id){
                unset($dataJson[$i]->id);
                // Remove the keys from array data after removing the item
                $dataJson = array_values($dataJson);
                file_put_contents('employees.json', json_encode($dataJson));
                break;
            }
        }
    }

    public function getEmployee($id){

        $jsonFile = file_get_contents('employees.json');
        $json = json_decode($jsonFile);
        $employee = new Employee();

        foreach($json as $OneEmployee){

            if($employee->id == $id){
                
                $employee->setId($OneEmployee->id);
                $employee->setFirstName($OneEmployee->firstName);
                $employee->setLastName($OneEmployee->lastName);
                $employee->setBirthDate($OneEmployee->birthDate);
                $employee->setGender($OneEmployee->gender);

                break;
            }
        }
        return $employee;

    }

    public function editEmployee($id, $firstName, $lastName, $birthDate, $gender){
        $file = file_get_contents('employees.json');
        $dataJson = json_decode($file);
        $editedEmployee = array (
            'id' => $id,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthDate,
            'gender' => $gender,
            
        );

        for($i=0; $i<count($dataJson); $i++){
            if($dataJson[$i]['id'] == $id){
                $dataJson[$i] = $editedEmployee;
                break;
            }
        }
        
        file_put_contents('employees.json', json_encode($dataJson));
    }
}
?>