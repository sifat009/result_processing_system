<?php
	include('include/db.php');
	$dept = $_REQUEST['dept'];
	
	if(isset($_REQUEST['submit'])) {
		$reg_no = $_REQUEST['reg_no'];
		$semester = $_REQUEST['semester'];
		$courses = [$_REQUEST['course_id1'],$_REQUEST['course_id2'],$_REQUEST['course_id3'],$_REQUEST['course_id4'],$_REQUEST['course_id5']];
		$credits = [$_REQUEST['credit1'],$_REQUEST['credit2'],$_REQUEST['credit3'],$_REQUEST['credit4'],$_REQUEST['credit5']];
		$grades = [$_REQUEST['grade1'],$_REQUEST['grade2'],$_REQUEST['grade3'],$_REQUEST['grade4'],$_REQUEST['grade5']];
		$j = 0;
		while($j < count($courses)){
			$query = "INSERT INTO courses ( reg_no, dept_name, course_id, credit, grade, semester) VALUES ($reg_no, '$dept', '$courses[$j]', $credits[$j], $grades[$j], '$semester')";
			$statement = $db->prepare($query);
			$result = $statement->execute() or die("Couldn't Insert");
			$j++;
		}
		$total_credits = array_sum($credits);
		$total_cg = 0;
		for($i = 0; $i < count($credits); $i++) {
			$total_cg += $credits[$i] * $grades[$i]; 
		}
		$gpa = round(($total_cg / $total_credits), 2);
		
		if($semester == '8th'){
			$query = "INSERT INTO results( reg_no, gpa, semester) VALUES ($reg_no, $gpa, '$semester')";
			$statement = $db->prepare($query);
			$statement->execute() or die("Connection Error");
			
			$query1 = "SELECT SUM(credit) FROM courses WHERE reg_no = $reg_no GROUP BY semester";
			$stmt = $db->prepare($query1);
			$stmt->execute() or die("Connection Error");
			$credit_output = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			$q = "SELECT gpa FROM results WHERE reg_no= $reg_no GROUP BY semester";
			$st = $db->prepare($q);
			$st->execute() or die("Connection error");
			$gpa_output = $st->fetchAll(PDO::FETCH_ASSOC);
			
			$total_credit = 0;
			$total_gpa = 0;
			
			foreach($credit_output as $c){
				$total_credit += $c['SUM(credit)'];
			}
			
			for($i = 0; $i < count($credit_output); $i++){
				$total_gpa += ($gpa_output[$i]['gpa'] * $credit_output[$i]['SUM(credit)'] ); 
			}
			
			$cgpa = round($total_gpa/$total_credit, 2);
			
			$qu = "UPDATE results SET cgpa = $cgpa WHERE reg_no = $reg_no";
			$s = $db->prepare($qu);
			$s->execute() or die("Connnection Error");
			
			
//			echo "<pre>";
//			print_r($output[0]['SUM(credit)']);
//			print_r($gpa_output[0]['gpa']);
//			echo "</pre>";
			
		}else {
			$cgpa = 'Not completed yet';
			$query = "INSERT INTO results( reg_no, cgpa, gpa, semester) VALUES ($reg_no, '$cgpa', $gpa, '$semester')";
			$statement = $db->prepare($query);
			$statement->execute() or die("Connection Error");
		}
		
		$query = "INSERT INTO students(reg_no, semester, dept_name) VALUES ($reg_no, '$semester', '$dept')";
		$statement = $db->prepare($query);
		$statement->execute() or die("Coundn't connect");
		
		header('location: viewall.php');
		
	}
?>
			
			
			<?php
				include('common/header.php');
				$course_number = 5;

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
                <form action="" method="post">
                <div class="col-lg-12">
					<div class="form-group row">
					  <label for="reg_no" class="col-2 col-form-label">Student Registration No :</label>
					  <div class="col-10">
						<input class="form-control" type="number" placeholder="1422" name="reg_no" id="reg_no" required>
					  </div>
					</div>
					<div class="form-group row" >
						<label for="semester">Semester</label>
						<select class="form-control" name="semester" id="semester" >
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
					<table class="table table-responsive table-hover " >
						<thead>
							<th>Course Name</th>
							<th></th>
							<th>Credit</th>
							<th></th>
							<th>Grade</th>	
						</thead>
						<?php for($i = 0; $i < $course_number; $i++): ?>
						<tbody>
							<tr>
								<td>
									<?php if( $dept == 'cse'): ?>
										<div class="form-group row" >

											<select class="form-control" name="course_id<?= $i+1 ?>" id="course_id" >
											  <option value="cse101" >CSE_101</option>
											  <option value="cse102" >CSE_102</option>
											  <option value="cse103" >CSE_103</option>
											  <option value="cse104" >CSE_104</option>
											  <option value="cse105" >CSE_105</option>
											</select>
										</div>
									<?php endif; ?>
									
									<?php if( $dept == 'bba'): ?>
										<div class="form-group row " >

											<select class="form-control" name="course_id<?= $i+1 ?>" id="course_id">
											  <option value="bba101" >BBA_101</option>
											  <option value="bba102" >BBA_102</option>
											  <option value="bba103" >BBA_103</option>
											  <option value="bba104" >BBA_104</option>
											  <option value="bba105" >BBA_105</option>
											</select>
										</div>
									<?php endif; ?>
									
									<?php if( $dept == 'ece'): ?>
										<div class="form-group row " >

											<select class="form-control" name="course_id<?= $i+1 ?>" id="course_id">
											  <option value="ece101" >ECE_101</option>
											  <option value="ece102" >ECE_102</option>
											  <option value="ece103" >ECE_103</option>
											  <option value="ece104" >ECE_104</option>
											  <option value="ece105" >ECE_105</option>
											</select>
										</div>
									<?php endif; ?>
								</td>
								<td></td>
								<td>
									<div class="form-group row">

									  <select class="form-control" name="credit<?= $i+1 ?>" id="credit">

										  <option value="1.5" >1.5</option>
										  <option value="2" >2</option>
										  <option value="3" >3</option>
										  <option value="4" >4</option>
										</select>
									</div>
								</td>
								<td></td>
								<td>
									<div class="form-group row">

									  <select class="form-control" name="grade<?= $i+1 ?>" id="grade">

										  <option value="4" >A+</option>
										  <option value="3.75" >A</option>
										  <option value="3.5" >A-</option>
										  <option value="3.25" >B+</option>
										  <option value="3" >B</option>
										  <option value="2.75" >B-</option>
										  <option value="2.5" >C+</option>
										  <option value="2.25" >C</option>
										  <option value="2" >D</option>
										  <option value="0" >F</option>
										</select>
									</div>
								</td>	
							</tr>
						</tbody>
						<?php endfor; ?>
					</table>

					<div class="form-group row text-center ">
						<input type="submit" name="submit" value="Insert" class="btn btn-lg btn-primary">
					</div>
                </div>
                </form>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
	
		<!-- footer	-->
		
		<?php
			include('common/footer.php');
		?>