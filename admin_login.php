<?php
	include('include/db.php');
	if(isset($_REQUEST['login'])) {
		$name = $_REQUEST['name'];
		$password = md5($_REQUEST['password']);
		
		$query = "SELECT * FROM admins WHERE name = ? AND password = ?";
		$statement = $db->prepare($query);
		$statement->execute(array($name, $password)) or die("CONNECTION ERROR");
		$results =  $statement->fetchAll(PDO::FETCH_ASSOC);
		if(count($results) == 1){
			session_start();
			$_SESSION['name'] = $results[0]['name'];
			header('location: index.php');
		}
	}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Result Processing LogIn Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1>Result Processing System</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="login-form" method="post" action="">
    <input type="text" placeholder="Enter your username here" name="name"/>
    <input type="password" placeholder="Enter your password here" name="password"/>
    <button name="login">login</button>
  </form>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
