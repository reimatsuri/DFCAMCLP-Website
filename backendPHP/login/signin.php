<?php
    include("connect.php");

    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("Location:landingpage.php");
        }
        else{
            echo'<script>
                    window.location.href = "login.php";
                    alert("Login failed. Invalid username or password!!");
                </script>';
        }

    }



?>