<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require 'config.php';
    

    $user = $_POST['username'];
    $pwd = $_POST['password'];
    


    $con = Connection::con();
    $sql = "select * from users where username=:user and password = :password";
    $stmt = $con->prepare($sql);

    $paramaters = array(
        ':user' => $user,
        ':password' => $pwd,
    );

    $stmt->execute($paramaters);

    echo $stmt->num_rows;
   // $arr = ["status" => "success"];
     
    //echo json_encode($arr);
}
    
    

