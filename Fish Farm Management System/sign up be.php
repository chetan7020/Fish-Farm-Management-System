<?php
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $pass = $_POST["pass"];
    $c_pass = $_POST["c_pass"];

    include("connect.php");
    session_start();
    $_SESSION['mail'] = $mail ;
    if($pass == $c_pass)
    {
        $query = "INSERT INTO `user_new`(`Name`, `Email`, `Password`, `pond`) VALUES ('$name','$mail','$pass','$c_pass')" ;
        mysqli_query($conn , $query);
    }
    else
    {
        echo "<script>alert('Password Missmatched')</script>";
    }
?>