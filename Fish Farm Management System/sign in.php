<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="sign in.css" />
    
    <title>Farming CEO-Sign in</title>
  </head>
  <body>
    <nav class="navigation">
      <img src="logo3.png">
      <label class="logo">Farming CEO</label>    
      <ul>
          <li><a class = "active" href="index.php">Home</a></li>
          <!-- <li><a href="#">Feature</a></li> -->
          <li><a href="about us.php">About Us</a></li>
          <li><a href="sign in.php">Sign In</a></li>
          <li><a href="sign up.php">Sign Up</a></li>
      </ul>
  </nav>
    <div class="container">
      <div class="forms-container">
        <div class="signin">
          <form action="acc_home.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email"  name="email" id="e"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="submit" onclick="validate()" />
            <!-- <p class="social-text">Or Sign in with social platforms</p> -->
            <!-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
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