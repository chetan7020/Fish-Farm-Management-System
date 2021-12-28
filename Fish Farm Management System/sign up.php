<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sign up.css" />
    <title>Farming CEO-Sign up</title>
</head>

<body>
    <nav class="navigation">
        <img src="logo3.png">
        <label class="logo">Farming CEO</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li><a href="sign in.php">Sign In</a></li>
            <li><a href="sign up.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="forms-container">
            <div class="signup">
                <form action="GetDetails.php" method="POST"  class="sign-up-form" name="form1">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Full Name" name="name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" id="e"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Create Password" name="pass"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="c_pass" />
                    </div>
                    <input type="submit" class="btn" name="submit" value="Sign up"  onclick="validate()"/>
                </form>
                <script type="text/javascript">
                function validate() {
  
            var user = document.getElementById("e").value;
            var user2 = document.getElementById("e");
            var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (re.test(user)) {
                // alert("done");
                return true;
            }
            else {
                user2.style.border = "red solid 3px";
                return false;
            }
        }
          </script>
            </div>
        </div>
    </div>
</body>

</html>