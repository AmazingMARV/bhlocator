<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){

        require 'php/config.php';
        

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
        //$street = $_POST['street'];
        $role = 'USER';


        $con = Connection::con();
        $sql = "insert into users (username, password, lname, fname, mname, sex, contact_no, province, city, barangay, role) 
            values (:user, :password, :lname, :fname, :mname, :sex, :contact_no, :province, :city, :barangay, :role)";
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
            ':role' => $role,
        );

        $stmt->execute($paramaters);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="register-container">
        <div class="container">
            <div class="row col-lg-6 offset-lg-3 col-sm-12">
    
                <form action="/register.php" method="post">
                   
                    <div class="container">
                        
                        <div class="row">
                            <h2>REGISTRATION</h2>
                             <hr>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control"  placeholder="Username">
                                    <label for="floatingInput">Username</label>
                                  </div>
                                  
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <label for="floatingInput">Password</label>
                                  </div>
                                  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                  </div>
                                  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" name="fname" class="form-control"  placeholder="First Name">
                                    <label for="floatingInput">First Name</label>
                                  </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" name="mname" class="form-control"  placeholder="Middle Name">
                                    <label for="floatingInput">Middle Name</label>
                                  </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="lname" class="form-control"  placeholder="Last Name">
                                    <label for="floatingInput">Last Name</label>
                                  </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="contact_no" class="form-control"  placeholder="Contact Number">
                                        <label for="floatingInput">Contact Number</label>
                                      </div>
                                      
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select class="form-select form-select-lg mb-3" name="sex" aria-label=".form-select-lg example">
                                        <option selected>Male</option>
                                        <option value="1">Female</option>
                                     
                                      </select>
                                      
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <select class="form-select form-select-lg mb-3" name="province" aria-label=".form-select-lg example">
                                    <option selected>Province</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select class="form-select form-select-lg mb-3" name="city" aria-label=".form-select-lg example">
                                    <option selected>City</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select class="form-select form-select-lg mb-3" name="barangay" aria-label=".form-select-lg example">
                                    <option selected>Barangay</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
            
        </div>
            
            
    
    </div>
</body>
</html>