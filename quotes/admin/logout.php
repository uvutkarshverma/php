
<?php
session_start(); //to ensure you are using same session
unset($_SESSION["username"]);
session_destroy(); //destroy the session

header('Location: login.php?message=logout');
?>