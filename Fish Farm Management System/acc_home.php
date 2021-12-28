<?php
    if(isset($_POST['submit']))
    {
    $mail = $_POST["email"];
    $pass = $_POST["pass"];
    session_start();
    $_SESSION['email'] = $mail ;
    include("connect.php");

    $query = "SELECT * FROM `user_new` WHERE `Email`= '$mail'" ;

    $reasult = mysqli_query($conn , $query);
    if(mysqli_num_rows($reasult) === 1)
    {
        $row = mysqli_fetch_assoc($reasult);
        if($row['Email'] == $mail && $row['Password'] == $pass)
        {
            echo "<script>alert('Log in sussesfully')</script>";
        }
        else
        {
            echo "<script>alert('Incorrect Password or Email')</script>";
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="acc_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>

<body onload="ShowBanners()">
    <nav class="navigation">
        <img src="logo3.png">
        <label class="logo">Farming CEO</label>
        <ul>
            <li><a class="active" href="acc_home.php">Home</a></li>
            <li><a href="report.php">Report</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>
    <p class="wlc"><?php echo "Welcome ".$mail." To Farming - CEO";?></p>
    <style>.wlc{
        padding-top:50px;
        text-align:center;
        font-size:40px;
        font-family:san-serif;
        }
        .bn{
            padding-top:65px;
            border-radius: 15px;
        }
    </style>
    <center><a target="_blank" href="https://en.wikipedia.org/wiki/Fish_farming" ><img class = "bn" src="fish_feed.jpg" width="900" height="350" name="ChangeBanner"/></a></center>
    <script language="Javascript">MyBanners=new Array('bn2.jpg','bn3.jpg','fish_feed.jpg','bn5.jpg')
    banner=0
    function ShowBanners()
    { if (document.images)
        { banner++
        if (banner==MyBanners.length) {
                banner=0
            }
            document.ChangeBanner.src=MyBanners[banner]
            setTimeout("ShowBanners()",5000)
        }
    }
    </script>    
</body>

</html>