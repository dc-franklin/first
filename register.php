<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <fieldset>
        <legend></legend>
        <form action="res/register_process_module.php" method="post" enctype="application/x-www-form-urlencoded">
            <div>
                <label for="Fullname">Enter your full name</label><br>
                <input type="text" id="fullname" name="fullname">
            </div>
            <div>
                <label for="username">Enter your username</label><br>
                <input type="text" id="username" name="username">
            </div><br>
            <div>
                <label for="country">Select Country</label>
                <select name="country" id="country">
                    <option value="Nigeria">Nigeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ghana">Ghana</option>
                </select>
            </div>
            <div>
                <h4>Gender</h4>
                <input type="checkbox" name="sex" id="male"><label for="male">Male</label>
                <input type="checkbox" name="sex" id="female"><label for="female">Male</label>
            </div><br>
            <div>
                <label for="email">Enter your Email</label><br>
                <input type="email" name="email" id="email" placeholder="Enter your Email">
            </div><br>
            <div>
                <label for="password">Choose a Strong Password</label><br>
                <input type="password" name="password" id="password" placeholder="Form a tight lock">
            </div><br>
            <button name="registerBtn">Submit Form</button><br>
            <!-- <button name="loginBtn">Login</button> -->
        </form>
    </fieldset>
</body>
</html>