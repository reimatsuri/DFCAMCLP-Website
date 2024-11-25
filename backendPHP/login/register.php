<?php

include("connect.php");

if(isset($_POST['signUp'])){
    $cpassword=$_POST['cpassword'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result= mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    $sql="SELECT * FROM users WHERE fullname='$fullname' and password='$password'";
    $result= mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    if($count_user == 0 & $count_email == 0){
        if($password=$cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(fullname, email, password) VALUES('$fullname','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: login.php");
            }
        }
        else{
            echo '<script>
                alert("Passwords do not match");
                window.location.href="signup.php";
            </script>';
        }
    }
    else{
        if($count_user>0){
            echo '<script>
                window.location.href="signup.php"
                alert("Name already exists!!");
            </script>';
        }
        if($count_user>0){
            echo '<script>
                window.location.href="signup.php"
                alert("Email already exists!!");
            </script>';
        }
    }

}
?>