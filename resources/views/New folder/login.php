<?php require 'head-layout.php' ?>
    <div class="login-container">
        <div class="login-panel effect1">
            <h2>Account Login</h2>
            <hr>
            <form id="form-submit">
                <div class="form-floating mb-3">
                    <input type="text" id="username" class="form-control" placeholder="Username" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            
        </div>
    </div>


    <?php require 'script-layout.php' ?>

    <script type="text/javascript">
    
        $(document).ready(function() {

            var username = document.getElementById('username');
            var password = document.getElementById('password');
           

            $('#form-submit').on( 'submit', function (e) {
                //let data = table.row( $(this).parents('tr') ).data();
                e.preventDefault();

                console.log(province.value);
            
                $.post('php/ajax-register-user.php',
                    {
                        username: username.value,
                        password: password.value,
                    },
                    function(data, status){
                        if(status=="success"){
                            window.location = 'index.php';
                            
                        }else{
                            alert('An error occured. ERROR : ' +status);
                        }

                    }
                )
            });//criteria click delete
        });        
    </script>

    <?php require 'foot-layout.php' ?>
