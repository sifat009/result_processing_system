<?php
	session_start();
	if(count($_SESSION) == 0){
		header('location: st_login.php');
	}
	include('include/db.php');
	include('include/functions.php');
	$query = "SELECT * FROM courses JOIN results USING(reg_no, semester)";
	$stmt = $db->prepare($query);
	$stmt->execute() or die("Connection error");

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//	echo "<pre>";
//	print_r($results);
//	echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>afterlogin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>   
  <style type="text/css">
	body{
	  padding: 10px;

	}
	.page-header{
	  margin-top:-5px;
	  background: #222D32;
	  color: white;
	}

	#firsttable{
	  margin-top:-10px;
	  width: 30%;
	}
	#secondtable{
	  font-family:vernada;
	  font-weight: bold;
	}
	#btn{
	  float: right;
	  margin-right: 20px;
	}
	table:last-child {
		  border-bottom: 1px solid #ddd;
	}
	.center {
		text-align: center;
	 }
	  .btn-top{
		  margin-top: 50px;
		  margin-bottom: 50px;
	  }
   </style> 

  </head>
  <body id="content">
    <div class="page-header well">
      
    </div> 

<div>    
    <div id="btn">
       <button onclick="window.print()" class="btn btn-success" ><span class="glyphicon glyphicon-print"></span> Print  Your Result</button>
       <a href="st_logout.php" class="btn btn-primary btn-top">Logout</a>
    </div>
    <!------------------table--------------------> 
        <table class="table table-hover" id="firsttable">
              <tr>
                <th class="bg "><span class="glyphicon glyphicon-globe"></span> Registration No</th>
                <td><b><?= $_SESSION['reg_no'] ?></b></td>   
              </tr>
              <tr>
                <th class="bg "><span class="glyphicon glyphicon-education"></span> Department</th>
                <td><b><?= strtoupper($_SESSION['dept']) ?></b></td>   
              </tr>
        </table>
</div>
   <h3 style="text-align: center;" ><br><u>Your Result </u></h3>
<!---table 2---------------------->
 <table class="table table-bordered " id="secondtable">

   <tr class="active">
   	  <th class="center">Subject Code</th>
   	  <th class="center">Semester</th>
   	  <th class="center">Grade Point</th>
   	  <th class="center">Total Grade</th>
   </tr>
   <?php for($i = 0; $i < count($results); $i++): ?>
   <tr class="center">
		   <td><?= $results[$i]['course_id'] ?></td>
	   <?php if(($i % 5) == 0): ?>
		   <td class="center" rowspan="5" ><?= $results[$i]['semester'] ?></td>
	   <?php endif; ?>
		   <td><?= get_grade($results[$i]['grade']) ?></td>
   	   <?php if($i % 5 == 0): ?>
  	       
   	       <td class="center" rowspan="5" ><?= $results[$i]['gpa'] ?></td>
   	   
   	   <?php endif; ?> 	
   </tr>
   <?php endfor; ?>  
   </table>
    <div class=" well"></div>
    
    
  </body>
</html>