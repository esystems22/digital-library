<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Page</title>
</head>
<body>
    <div class="container">
        <h2>User Registration Form</h2>
        <div class="content">

        </div>
        <div class="content">
            <form action="admin_login.php" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label><br>
                    <input type="text" placeholder="Enter Full Name" name="fname">
                </div>
                <div class="form-group">
                    <label for="username">Username</label><br>
                    <input type="text" placeholder="Enter Username" name="username">
                </div>
                <div class="form-group">
                    <label for="regno">Registration Number</label><br>
                    <input type="text" placeholder="Enter Registration Number" name="regno">
                </div>
                <div class="form-group">
                    <label for="depart">Department</label><br>
                    <input type="text" placeholder="Enter Department" name="depart">
                </div>
                <div class="form-group">
                    <label for="level">Level</label><br>
                    <select name="level" id="">
                        <option value="Select Level">Select Level</option>
                        <option value="Level 100">Level 100</option>
                        <option value="Level 200">Level 200</option>
                        <option value="Level 300">Level 300</option>
                        <option value="Level 400">Level 400</option>
                        <option value="Level 500">Level 500</option>
                    </select>           
                 </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" placeholder="Enter a Course" name="course">
                </div>
                <div class="form-group">
                    <label for="password" >Password</label><br>
                    <input type="password" name="pwd" placeholder="Choose Password">
                </div>
                <div class="form-group">
                    <label for="cpassword" >Confirm Password</label><br>
                    <input type="password" name="cpwd" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button name="btn_reg">Register</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
