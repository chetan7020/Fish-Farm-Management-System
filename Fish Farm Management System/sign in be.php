<?php
    $mail = $_POST["email"];
    $pass = $_POST["pass"];

    include("connect.php");

    $query = "SELECT * FROM `user_new` WHERE `Email`= '$mail'" ;

    $reasult = mysqli_query($conn , $query);
    if(mysqli_num_rows($reasult) === 1)
    {
        $row = mysqli_fetch_assoc($reasult);
        if($row['Email'] == $mail && $row['Password'] == $pass)
        {
            header("Location : ./acc_home.php");
            
        }
        else
        {
            echo "<script>alert('Incorrect Password or Email')</script>";
            exit();
        }
    }
?>