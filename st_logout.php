<?php
	session_start();
	session_destroy();
	header('location: st_login.php');

?>