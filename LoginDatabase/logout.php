<?php
	session_start();
	session_destroy();
 
	header('location:Login_SignUpUI/index.php');
?>