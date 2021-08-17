<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../config.php';

    $id = $_POST['id'];
  
    $con = Connection::con();
    $sql = "delete from users where user_id = :id";
    $stmt = $con->prepare($sql);
    $paramters = array(
        ':id' => $id,
    );

    $stmt->execute($paramters);
    
    //$res = $stmt->fetchAll();
    //$obj = new \stdClass();

     $arr = ["status" => "deleted"];
     
   
    echo json_encode($arr);
}
