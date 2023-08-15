<?php
    if(isset($_POST["registerBtn"])){
        if(empty($_POST["fullname"])){
            header('Location:../register.php?fullname=Please+Fill+This+Fullname+Field');
        }else if(empty($_POST["username"])){
            header('Location:../register.php?country=Please+input+username');
        }else if(empty($_POST["country"])){
            header('Location:../register.php?country=Please+Select+A+Country+Field');
        }else if(empty($_POST["sex"])){
            header('Location:../register.php?gender=Please+Select+A+Gender+Field');
        }else if(empty($_POST["email"])){
            header('Location:../register.php?email=Please+Fill+The+Email+Field');
        }else if(empty($_POST["password"])){
            header('Location:../register.php?password=Please+Fill+The+Password+Field');
        }else{
            $fullname = htmlentities($_POST['fullname']);
            $country = htmlentities($_POST['country']);
            $sex = htmlentities($_POST['sex']);
            $email = htmlentities($_POST['email']);
            $password = htmlentities($_POST['password']);

            $userData = $fullname.'~'.$username.'~'.$country.'~'.$sex.'~'.$email.'~'.$password;

            // 60 * 60 * 24 * 5
            setcookie('userData', $userData, time() + (86400 * 2), '/');
            // setcookie('userEmail', $email, time() + (86400 * 2), '/');
            setcookie('username', $username, time() + (86400 * 2), '/');
            setcookie('userPassword', $password, time() + (86400 * 2), '/');
            
            header('Location:../login.php?Success=Congratulations+.+Registration+successful+Please+Login!');
            
        }
    }else{
        header('Location:../register.php?error=Click+Submit');
    }

    // ------Registration form processing [End]

    // ------Login form processing [Start]


?>