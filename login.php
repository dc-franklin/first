<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <marquee><?php if(isset($_GET['Success'])){echo $_GET['Success'];} ?></marquee>
    <mark style="color:red;"><?php if(isset($_GET['msg'])){echo $_GET['msg']; }?></mark><br>
    <h1>Welcome. Please Login</h1>
    <fieldset>
        <legend>User Login Form</legend>
        <form action="res/login_process_module.php" method="post" enctype="application/x-www-form-urlencoded">
            <div><br>
                <label for="username"></label>
                <input type="text"  id="username" placeholder="Enter Username" size="100" name="username">
            </div><br>
            <div>
                <label for="password"></label>
                <input type="password" id="password" placeholder="Enter Password" size="100" name="password">
            </div><br>
            <div>
                <input type="checkbox" name="rem" id="rem"><label for="rem">Remember me</label>
            </div><br>
            <a href="#">Forgotten password?</a>
            <br><br>
            <div>
                <button name="loginBtn">Login</button>
            </div>
        </form>
    </fieldset>
</body>
</html>