<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require 'config.php';
    

    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sex = $_POST['sex'];
    $contact_no = $_POST['contact_no'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $street = $_POST['street'];
    $role = 'USER';


    $con = Connection::con();
    $sql = "insert into users (username, password, lname, fname, mname, sex, contact_no, province, city, barangay, street, role) 
        values (:user, :password, :lname, :fname, :mname, :sex, :contact_no, :province, :city, :barangay, :street, :role)";
    $stmt = $con->prepare($sql);

    $paramaters = array(
        ':user' => $user,
        ':password' => $pwd,
        ':lname' => $lname,
        ':fname' => $fname,
        ':mname' => $mname,
        ':sex' => $sex,
        ':contact_no' => $contact_no,
        ':province' => $province,
        ':city' => $city,
        ':barangay' => $barangay,
        ':street' => $street,
        ':role' => $role,
    );

    $stmt->execute($paramaters);

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
    
    

