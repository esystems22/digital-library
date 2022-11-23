<?php
include "server.php";
$errors = array();


if(isset($_POST['btn_reg'])){
    //variables declarations
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $regno = $_POST['regno'];
    $depart = $_POST['depart'];
    $level = $_POST['level'];
    $course = $_POST['course'];
    $password = $_POST['pwd'];
    $cpassword = $_POST['cpwd'];

    //Validation Section
    if(empty($fname)){array_push($errors, "Full Name is Required");}
    if(empty($username)){array_push($errors, "Username is Required");}
    if(empty($regno)){array_push($errors, "Reg. Number is Required");}
    if(empty($level)){array_push($errors, "Level is Required");}
    if(empty($course)){array_push($errors, "Course is Required");}
    if(empty($password)){array_push($errors, "Password is Required");}
    if(empty($cpassword)){array_push($errors, "Confirm Password Required");}
    if(($password!=$cpassword)){array_push($errors, "Passwords Mistmatched");}

    $sql = "SELECT * FROM students WHERE username='$username'";
    $result1 = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result1)>0){array_push($errors, "User Already Exist");}

    //Register user if there is no any error.
    if(count($errors)==0){
        $password = md5($password);
        $sql = "INSERT INTO students (fname, username, regno, department, level, course, pass) VALUES('$fname', '$username', '$regno', '$depart', '$level', '$course', '$password')";
        $result = mysqli_query($conn, $sql);
        header("Location: user_login.php");
    }

    

}


//LOGIN SECTION
if(isset($_POST['btn_login'])){
    //variables
    $username = $_POST['username'];
    $password = $_POST['pwd'];


    //Validations
    if(empty($username)){array_push($errors, "Username Required");}
    if(empty($password)){array_push($errors, "Password Required");}

    //If there is no any error(s)
    if(count($errors)==0){
        $password = md5($password);
        $sql = "SELECT * FROM students WHERE username='$username' AND pass='$password' LIMIT 1";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)==1){
            header("Location: user_dashboard.php");
        }
    }
}



?>