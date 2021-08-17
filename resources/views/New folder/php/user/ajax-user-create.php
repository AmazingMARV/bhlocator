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
    $id = $_POST['id'];





    $con = Connection::con();

    if($id > 0){
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
    }else{

        $sql = "insert into users (username, lname, fname, mname, sex, role) values (:user, :lname, :fname, :mname, :sex, :role)";
        $stmt = $con->prepare($sql);
    
        $paramters = array(
            ':user' => $user,
            ':lname' => $lname,
            ':fname' => $fname,
            ':mname' => $mname,
            ':sex' => $sex,
            ':role' => $role,
        );
       
        
    }


    $stmt->execute($paramters);
    $arr = ["status" => "saved"];
     

    echo json_encode($arr);
}
