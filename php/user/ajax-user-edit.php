<?php

require '../config.php';
$id = $_GET['id'];
$con = Connection::con();
$sql = "select * from users where user_id = :id limit 1";
$stmt = $con->prepare($sql);
$parameters = array(':id' => $id);
// $stmt->bindParam(':pwd', $pwd);
$stmt->execute($parameters);
$res = $stmt->fetchAll();

//$obj = new \stdClass();

$arr = [];

foreach($res as $row){

    array_push($arr, array(
        'user_id' => $row['user_id'],
        'username' => $row['username'],
        'lname' => $row['lname'],
        'fname' => $row['fname'],
        'mname' => $row['mname'],
        'sex' => $row['sex'],
        'role' => $row['role'],
    ));
}

echo json_encode($arr);