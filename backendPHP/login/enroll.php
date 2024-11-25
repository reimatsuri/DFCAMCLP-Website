<?php
include("connect.php");

if(isset($_POST['enroll'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $course=$_POST['course'];

    $sql="SELECT * FROM enrollees WHERE email='$email' and fullname='$fullname'";
    $result = mysqli_query($conn,$sql);
    $count_email=mysqli_num_rows($result);

    $sql="SELECT * FROM enrollees WHERE fullname='$email'";
    $result = mysqli_query($conn,$sql);
    $count_name=mysqli_num_rows($result);

    if($count_email == 0 & $count_name == 0){
        if($course=="BSBA" or $course=="BSBA MAJOR IN FINANCIAL MANAGEMENT" or $course=="BSBA MAJOR IN MARKETING MANAGEMENT" or $course=="BSBA MAJOR IN HUMAN RESOURCE DEVELOPMENT MANAGEMENT" or $course=="BSIS" or $course=="BSA" or $course=="BSCPE" & strlen($contact) == 11){
            $sql= "INSERT INTO enrollees(fullname, email, contact, course) VALUES('$fullname','$email','$contact','$course')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo'<script>
                    alert("Successfully Enrolled!!");
                    window.location.href="enrollment.php";
                </script>';
            }
        }
        else{
            echo '<script>
                alert("Invalid Course or Contact!!");
                window.location.href="enrollment.php";
            </script>';
        }
    }
    else{
        if($count_email>0){
            echo'<script>
                alert("Email already exist!!");
                window.location.href="enrollment.php";
            </script>';
        }
        if($count_name>0){
            echo'<script>
                alert("Name already enrolled!!");
                window.location.href="enrollment.php";
            </script>';
        }
    }
}
?>