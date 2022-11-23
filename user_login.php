<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Section</title>
    <link rel="stylesheet" href="./static/admin_login.css">
</head>
<body>
   <?php include "process.php"; ?>
    <div class="container">
        <div class="content" id="div1">
        
        
        </div>
        <div class="content" id="div2">
            <h2>User Login</h2>
            <form action="user_login.php" method="post">
                <div class="form-group">
                    <label for="Username">Username</label><br>
                    <input type="text" placeholder="Enter Username" name="username">
                </div>
                
                <div class="form-group">
                    <label for="password" >Password</label><br>
                    <input type="password" name="pwd" placeholder="Enter Password">
                </div>
                
                <div class="form-group">
                    <button name="btn_login">Login</button><br><br>
                    <p>Dont Have Account? Register <a href="user_reg.php">Here</a></p>
                </div>
                
            </form>
            <footer>
                <p>Copyright &copy; Department of Computer Science, Al-Qalam University, Katsina. 2022</p>
            </footer>
        </div>
       
    </div>

</body>
</html>