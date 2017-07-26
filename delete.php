<?php
	include('include/db.php');
	$reg_no = $_REQUEST['reg_no'];
	$query = "DELETE FROM students WHERE reg_no = $reg_no ";
	$statement = $db->prepare($query);
	$statement->execute() or die("Connection Error");
	header('location: viewall.php');
?>