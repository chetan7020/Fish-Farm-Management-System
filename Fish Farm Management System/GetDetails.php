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
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="GetDetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Details</title>
</head>

<body>
    <!-- <nav class="navigation">
        <img src="logo3.png">
        <label class="logo">Farming CEO</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="#">Feature</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li>
                <a href="#"><img src="account.png" width="65" height="65">
                </a>
            </li>

        </ul>
    </nav> -->

    <!-- <div class="account">
        <a href="#"><img src="account.png" width="65" height="65">
        </a>
    </div> -->
    <div class="container">
        <div class="forms-container">
            <div class="getdetails">
                <form action="get detail be.php" method="POST" class="details">
                    <h3 class="title" style="margin-top: 10px;">Enter Details</h3>
                    <h4 class="title">Please fill your information in this form</h4>

                    <div class="input-field">
                        <label for="name" class="label">Fish Type</label>
                        <input type="text" name="fish_type" placeholder="Enter Fish Type" id="name" required>
                    </div>
                    <div class="input-field">
                        <label for="uname" class="label">Days Span</label>
                        <input type="number" name="days_span" placeholder="Enter Days Span" id="uname" required>
                    </div>
                    <div class="input-field">
                        <label for="avg" class="label">Average Weight of 1 Fish</label>
                        <input type="number" name="avg_weight" placeholder="Enter Average Weight of 1 Fish" id="avg" required>
                    </div>
                    <div class="input-field">
                        <label for="num_fish" class="label">Max Weight of 1 Fish</label>
                        <input type="number" name="max_weight" placeholder="Enter Max Weight of 1 Fish" id="num_fish" required>
                    </div>
                    <div class="input-field">
                        <label for="num_fish" class="label">Total Fish</label>
                        <input type="number" name="total_fish" placeholder="Enter Total Number of Fish" id="num_fish" required>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn" />

                </form>
            </div>
        </div>
    </div>

</body>


</html>