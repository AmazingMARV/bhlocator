<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require '../config.php';

    $user = $_POST['username'];
    //$pwd = $_POST['username'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sex = $_POST['sex'];
    $role = $_POST['role'];
    $id = $_POST['user_id'];




    $con = Connection::con();
    $sql = "update users set username = :user, lname = :lname, fname = :fname, mname = :mname, sex = :sex, role = :role where user_id = :id";
    $stmt = $con->prepare($sql);

    $paramters = array(
        ':user' => $user,
        ':lname' => $lname,
        ':fname' => $fname,
        ':mname' => $mname,
        ':sex' => $sex,
        ':role' => $role,
        ':id' => $id,
    );

    $stmt->execute($paramters);
    
    //$res = $stmt->fetchAll();
    //$obj = new \stdClass();

     $arr = ["status" => "saved"];
     
    // foreach($res as $row){

    //     array_push($arr, array(
    //         'user_id' => $row['user_id'],
    //         'username' => $row['username'],
    //         'lname' => $row['lname'],
    //         'fname' => $row['fname'],
    //         'mname' => $row['mname'],
    //         'sex' => $row['sex'],
    //         'role' => $row['role'],
    //     ));
    // }

    echo json_encode($arr);
}
