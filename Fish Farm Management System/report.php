<?php
    

    include("connect.php");
    session_start();
    $mail = $_SESSION['email'];
    $query = "SELECT * FROM `pond1` WHERE `Email`= '$mail'" ;
    // echo $mail;
    $reasult = mysqli_query($conn , $query);
    if(mysqli_num_rows($reasult) === 1)
    {
        $row = mysqli_fetch_assoc($reasult);
        $fish_type = $row['p1_fish_type'];
        $days_span = $row['p1_day_span'];
        $avg_wei_1f = $row['p1_avg_wei_1f'];
        $max_wei_1f = $row['p1_max_wei_1f'];
        $total_fish = $row['p1_total_f'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="report.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Farming CEO - Report</title>
</head>

<body>
    <nav class="navigation">
        <img src="logo3.png">
        <label class="logo">Farming CEO</label>
        <ul>
            <li><a class="active" href="acc_home.php">Home</a></li>
            <!-- <li><a href="#">Feature</a></li> -->
            <li><a href="report.php">Report</a></li>
            <li><a href="index.php">Logout</a></li>
        </ul>
    </nav>
    <script>
        // var fish_type = <?php echo $fish_type;?>;
        var days_span = <?php echo $days_span;?>;
        // var avg_wei_1f = <?php echo $avg_wei_1f;?>;
        // var max_wei_1f = <?php echo $max_wei_1f;?>;
        var total_fish = <?php echo $total_fish;?>;
        var month = 0;
        month = days_span / 30 ;
        var death_rate = 0.03; 
        var food_rate = 0.06;      
        var no_fish_will_death = total_fish * death_rate * month;
        var food_require_per_month = total_fish * food_rate * month;
        <?php   $death_rate = "<script>document.write(death_rate)</script>";
                $no_fish_will_death = "<script>document.write(no_fish_will_death)</script>";
                $d_s = "<script>document.write(days_span)</script>" ;
                $food_rate = "<script>document.write(food_rate)</script>";
                $month = "<script>document.write(month)</script>";
                $food_require_per_month = "<script>document.write(food_require_per_month)</script>"; ?>
    </script>
    <div class="rep">
        <div class="fish">
            <label>1) Fish Name :</label>   
            <label ><?php echo $fish_type;?></label>            
        </div>
        <div class="fish">
            <label>2) Days Span :</label>   
            <label ><?php echo $d_s;?></label>             
        </div>
        <div class="fish">
            <label>3) Weight of one fish :</label>   
            <label ><?php echo $avg_wei_1f;?></label>            
        </div>
        <div class="fish">
            <label>4) Max Weight of one fish :</label>   
            <label ><?php echo $max_wei_1f;?></label>            
        </div>
        <div class="fish">
            <label>5) Total fish :</label>   
            <label ><?php echo $total_fish;?></label>            
        </div>
        <div class="fish">
            <label>6) Death Rate :</label>   
            <label ><?php echo $death_rate." per month";?></label>            
        </div>
        <div class="fish">
            <label>7) Death Fish :</label>   
            <label ><?php echo $no_fish_will_death." fishes will die after ".$month." Month";?></label>            
        </div>
        <div class="fish">
            <label>8) Food Rate :</label>   
            <label ><?php echo $food_rate." per month";?></label>            
        </div>
        <div class="fish">
            <label>9) Food Required for one week :</label>   
            <label ><?php echo $food_require_per_month."kg for ".$month." Month";?></label>            
        </div>
    </div>
    <style>
    .rep{
        padding-left : 500px;
    }
</style>
</body>


</html>