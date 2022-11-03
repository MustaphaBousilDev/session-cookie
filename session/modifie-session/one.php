<?php 


session_start();
echo $_SESSION['username'];

$_SESSION['username']="zoro";
echo "<a href='two.php'>two</a>";



?>