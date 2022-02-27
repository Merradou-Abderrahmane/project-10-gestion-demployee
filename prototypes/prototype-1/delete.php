<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = json_decode(file_get_contents('data.json'));
    for($i = 0; $i < count($data); $i++){
        if($data[$i][0]==$id){
            unset($data[$i]);
            // Remove keys from array data  after removing the item
            $data = array_values($data);
            file_put_contents("data.json", json_encode($data));
            break;
        }
    }
header('Location: index.php');
}

?>