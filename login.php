<?php
session_start();

if (isset($_POST['submitl'])) {

    $password = $_POST['password'];
    $email = $_POST['email'];

    if ($password == "123" && $email == "adminsh@gmail.com") {
        $_SESSION['userAuth'] = ['password' => $password, 'email' => $email];
        header('Location: /admin.php');
    } else {
        echo "<script>alert('something went wrong, enter right password or username and try again')</script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/companyscss.css">
</head>

<body>

    <div class="login_wrapper">
        <div class="form">
            <div class="logo_head">
                <img src="./images/New/100ppi/4x/Asset 5.png" alt="" style="object-fit: contain; ">
            </div>
            <form method="post">
                <div>
                    <div class="labeled">email</div>
                    <div class="form_con">

                        <input type="email" placeholder="email" name="email" required>
                    </div>
                </div>

                <div>
                    <div class="labeled">password</div>
                    <div class="form_con">

                        <input type="password" placeholder="password" name="password" required>
                    </div>
                </div>
                <button class="loginbtn" type="submit" class="login" name="submitl">login</button>
            </form>
        </div>
    </div>

</body>

</html>