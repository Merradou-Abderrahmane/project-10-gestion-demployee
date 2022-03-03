<?php
    include 'employee.php';

    class EmployeeManager {


        public function getAllEmployees(){
       
            $file = file_get_contents('employees.json');
            $employeesList = json_decode($file);
            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list->id);
                $employee->setFirstName($employee_list->firstName);
                $employee->setLastName($employee_list->lastName);
                $employee->setGender($employee_list->gender);
                $employee->setBirthDate($employee_list->birthDate);
                array_push($employees, $employee);
            }

            return $employees;
        }


        public function insertEmployee($employee){

            $employee->setId(uniqid(false));


            $file = file_get_contents('employees.json');
            $data = json_decode($file);
            $employeeToList = array(
                                    'id'=> $employee->getId(),
                                    'firstName' => $employee->getFirstName(),
                                    'lastName' => $employee->getLastName(),
                                    'gender' => $employee->getGender(),
                                    'birthDate' => $employee->getBirthDate()
                                    );
            

            array_push($data, $employeeToList);
            file_put_contents('employees.json', json_encode($data));
        }


        public function deleteEmployee($id){
            $data = json_decode(file_get_contents('employees.json'));
            for($i = 0; $i < count($data); ++$i){
                if($data[$i]->id== $id){
                    unset($data[$i]);
                    // Remove the keys from data array after remove the item
                    $data = array_values($data);
                    file_put_contents("employees.json",json_encode($data));
                    break;
                }
            }
        }


        public function editEmployee($id, $firstName, $lastName, $gender, $birthDate){
            $file = file_get_contents('employees.json');
            $data = json_decode($file);
            $employeeToList = array(
                                    'id'=> $id,
                                    'firstName' => $firstName,
                                    'lastName' => $lastName,
                                    'gender' => $gender,
                                    'birthDate' => $birthDate,
                                    );

    
           for($i = 0; $i < count($data); $i++){
            if($data[$i]->id== $id){
                $data[$i] = $employeeToList;
                break;
            }
           }
            file_put_contents('employees.json', json_encode($data));
       
        }

        public function getEmployee($id){
            $file = file_get_contents("employees.json");
            $data = json_decode($file);
            $employee = new Employee();

            foreach($data as $employee_data){
                if($employee_data->id== $id){
                    $employee->setId($employee_data->id);
                    $employee->setFirstName($employee_data->firstName);
                    $employee->setLastName($employee_data->lastName);
                    $employee->setGender($employee_data->gender);
                    $employee->setBirthDate($employee_data->birthDate);
                    break;
                }
            }
            return $employee;
        }
    }

    
?>