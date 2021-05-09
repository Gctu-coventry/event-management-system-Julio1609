<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

require ('group.php');


session_start();


    if($_SERVER["REQUEST_METHOD"] === "POST") {
       // username and password sent from form 
      
       $myusername = mysqli_real_escape_string($bd, $_POST['username']);
       $mypassword = $_POST['password']; 
       $mypassword = md5($mypassword) ;
       
       $sql = "SELECT * FROM registration WHERE username = '$myusername' AND password = '$mypassword'";
       $result = mysqli_query($bd,$sql);
       $row = mysqli_fetch_array($result );
       
       
       $count = mysqli_num_rows($result);
       
       // If result matched $myusername and $mypassword, table row must be 1 row
         
       if($count == 1) {
          $_SESSION['login'] = $myusername;
          
          header("location: user.php");
       }else {
          $error = "Your Login Name or Password is invalid";
       }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login Form - Pure Coding</title>
</head>
<body>
    <div class="container">
        <form  method='POST' action="login.php" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn" name="login">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
        </br>

            <p class="login-register-text">If you are an admin <a href="adimin-login-html.html">login here</a></p>
        </form>
    </div>
</body>
</html>