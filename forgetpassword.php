<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="groupcss/loginsystem.css"/>
	<link rel="icon" type="image/x-icon" href="Logo.png">
</head>
<body>
<?php
require('db.php');
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $query = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $token = md5(uniqid(rand(), true));
        $query = "UPDATE `users` SET `token`='$token' WHERE email='$email'";
        mysqli_query($con, $query);
        $reset_link = "https://example.com/reset_password.php?token=" . $token;
        $to = $email;
        $subject = "Password Reset";
        $message = "Hello,\r\n\r\nClick the following link to reset your password:\r\n\r\n" . $reset_link . "\r\n\r\nBest regards,\r\nExample Team";
        $headers = "From: webmaster@example.com" . "\r\n" .
            "Reply-To: webmaster@example.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        mail($to, $subject, $message, $headers);
        echo "<div class='form'>
            <h3>An email has been sent to your address with instructions on how to reset your password.</h3><br/>
            </div>";
    } else {
        echo "<div class='form'>
            <h3>Invalid email address.</h3><br/>
            </div>";
    }
} else {
?>
    <form class="form" method="post" name="forgot_password">
        <h1 class="login-title">Forgot Password</h1>
        <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
        <input type="submit" value="Submit" name="submit" class="login-button"/>
		 <p class="link"><a href="login.php">Back to Login</a></p>
  </form>
<?php
}
?>
</body>
</html>
