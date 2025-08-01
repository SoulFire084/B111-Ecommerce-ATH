<?php

    if(isset($_POST["btnlogin"])) //login request
    {
        $email    = $_POST["email"];
        $password = $_POST["password"];
        $hashCode = "$2y$10$/FOEaR9DyV1x0z40F1Yjdu37U630rjGmkKbjmHDnv1/xXjhMLoeO2";
        if(password_verify($password, $hashCode))
        {
            echo "login success";
        }
        else{
            echo "login fail";
        }
    echo "$email and $password";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>"
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            require_once "navigation.php"
            ?>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="" class="form mt-5">
                    <fieldset>
                        <legend>Admin login</legend>
                        <div class="mb-1">
                            <label for="" class="form-label" >Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label" >Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" name="btnlogin">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>