<?php
	include('include/db.php');
	$reg_no = $_REQUEST['reg_no'];
	$query = "SELECT * FROM students JOIN results USING (reg_no, semester) WHERE reg_no = $reg_no";
	$statement = $db->prepare($query);
	$statement->execute() or die("Couldn't Connect");
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);

	if(isset($_REQUEST['submit'])) {
		$reg = $_REQUEST['reg'];
		$dept = $_REQUEST['dept'];
		$semester = $_REQUEST['semester'];
		$gpa = $_REQUEST['gpa'];
		$cgpa = $_REQUEST['cgpa'];
		
		$query1 = "UPDATE students SET reg_no = $reg , semester = '$semester', dept_name = '$dept' WHERE reg_no = $reg_no";
		$query2 = "UPDATE results SET reg_no = $reg , cgpa = '$cgpa', gpa = $gpa, semester = '$semester' WHERE reg_no = $reg_no";
		
		$statement1 = $db->prepare($query1);
		$statement1->execute() or die("COULDN'T CONNECT");
		
		$statement2 = $db->prepare($query2);
		$statement2->execute() or die("Connection Error");
		header("location: viewall.php");
	}

?>	
		<?php
			include('common/header.php');

		?>
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
		<?php
			include('common/sidebar.php');
		?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <?php 
					include('common/page_heading.php');
				?>
                <!-- /.row -->
                
                <div class="col-lg-12">
                <form action="" method="post" >
                	<table class="table table-striped">
					  <thead>
						<tr>
						  <th>Reg No.</th>
						  <th>Department</th>
						  <th>Semester</th>
						  <th>GPA</th>
						  <th>CGPA</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>
						  	<input class="form-control" type="text" value="<?= $results[0]['reg_no'] ?>" name="reg" >
						  </td>
						  <td>
						  	<div class="form-group row " >
								<select class="form-control" name="dept" id="dept">
									  <option value="cse" >CSE</option>
									  <option value="ece" >ECE</option>
									  <option value="bba" >BBA</option>
								</select>
							</div>
						  </td>
						  <td>
						  	<div class="form-group row " >
								<select class="form-control" name="semester" id="semester">
								      <option value="1st" >1st</option>
									  <option value="2nd" >2nd</option>
									  <option value="3rd" >3rd</option>
									  <option value="4th" >4th</option>
									  <option value="5th" >5th</option>
									  <option value="6th" >6th</option>
									  <option value="7th" >7th</option>
									  <option value="8th" >8th</option>
								</select>
							</div>
						  </td>
						  <td>
						  	<input class="form-control" type="text" id="gpa" name="gpa" value="<?= $results[0]['gpa'] ?>" >
						  </td>
						  <td>
							  <input class="form-control" type="text" id="cgpa" name="cgpa" value="<?= $results[0]['cgpa'] ?>" >
						  </td>
						</tr>
					  </tbody>
					</table>
               		<input class="btn btn-lg btn-primary pull-right " type="submit" value="update" name="submit">
                </form>
                	
                </div>
                
                
                <div id="page-wrapper"></div>
                <div id="page-wrapper"></div>
                <div id="page-wrapper"></div>
                <div id="page-wrapper"></div>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
	
		<!-- footer	-->
		
		<?php
			include('common/footer.php');
		?>