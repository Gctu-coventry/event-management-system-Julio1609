<?php


include ('group.php');

error_reporting(0);

if (isset($_POST['Send'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['message'];
	
	
			$sql = "INSERT INTO feedback (full, email, comment)
					VALUES ('$username', '$email', '$password')";
			mysqli_query($bd,$sql);

        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feedback-css.css">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body>
    <section></section>
    <div class="container">
        <form method="POST" action="">
            <h1>Give your Feedback</h1>
            <div class="id">
                <input type="text" name='name' placeholder="Full Name" required>
                <i class="far fa-user"></i>
            </div>
            <div class="id">
                <input type="email" name='email' placeholder="Email Address" required>
                <i class="far fa-evelope"></i>
                
            </div>
            <textarea cols="30" rows="5" name='message' placeholder="Enter your opinions here..."></textarea>
            <button name="Send">Send</button>
        </form>
    </div>
</body>
</html>