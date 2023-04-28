<?php 
//starts the session 
session_start();
//unset the session variable 
session_unset();
//session destroys all of data associated with the variable and logs the user out.
session_destroy();

header("Location: ../login.php");
?>