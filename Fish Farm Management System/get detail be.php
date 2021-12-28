<?php
    
    $fish_type = $_POST["fish_type"];
    $day_span = $_POST["days_span"];
    $avg_weight = $_POST["avg_weight"];
    $max_weight = $_POST["max_weight"];
    $total_fish = $_POST["total_fish"];

    session_start();
    $email = $_SESSION['mail'];
    include("connect.php");

    $query = "INSERT INTO `pond1`(`Email`, `p1_fish_type`, `p1_day_span`, `p1_avg_wei_1f`, `p1_max_wei_1f`, `p1_total_f`) VALUES ('$email','$fish_type','$day_span','$avg_weight','$max_weight','$total_fish')";
    mysqli_query($conn , $query);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Information Succesfully Added Now Relogin to view report');
    window.location.href='index.php';
    </script>");
    // else
    // {
    //     echo "<script>alert('Password Missmatched')</script>";
    // }
?>