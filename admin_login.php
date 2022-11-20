<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="./static/admin_login.css">
</head>
<body>
    <div class="container">
        <div class="content" id="div1">

        </div>
        <div class="content" id="div2">
            <h2>Admin Login</h2>
            <form action="admin_login.php" method="post">
                <div class="form-group">
                    <label for="Username">Username</label><br>
                    <input type="text" placeholder="Enter Username" name="username">
                </div>
                
                <div class="form-group">
                    <label for="password" >Password</label><br>
                    <input type="password" name="pwd" placeholder="Enter Password">
                </div>
                
                <div class="form-group">
                    <button name="admin_login">Login</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>