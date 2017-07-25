			<?php
				include('common/header.php');
				$dept = $_REQUEST['dept'];
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
                <form action="#" method="post">
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
									<div class="form-group row <?= ($dept == 'cse' ) ? '' :'no_display'?>" >

										<select class="form-control" name="course_id" id="course_id" >
										  <option value="cse101" >CSE_101</option>
										  <option value="cse102" >CSE_102</option>
										  <option value="cse103" >CSE_103</option>
										  <option value="cse104" >CSE_104</option>
										  <option value="cse105" >CSE_105</option>
										</select>
									</div>

									<div class="form-group row <?= ($dept == 'bba' ) ? '' :'no_display'?>" >

										<select class="form-control" name="course_id" id="course_id">
										  <option value="bba101" >BBA_101</option>
										  <option value="bba102" >BBA_102</option>
										  <option value="bba103" >BBA_103</option>
										  <option value="bba104" >BBA_104</option>
										  <option value="bba105" >BBA_105</option>
										</select>
									</div>

									<div class="form-group row <?= ($dept == 'ece' ) ? '' :'no_display'?>" >

										<select class="form-control" name="course_id" id="course_id">
										  <option value="ece101" >ECE_101</option>
										  <option value="ece102" >ECE_102</option>
										  <option value="ece103" >ECE_103</option>
										  <option value="ece104" >ECE_104</option>
										  <option value="ece105" >ECE_105</option>
										</select>
									</div>
								</td>
								<td></td>
								<td>
									<div class="form-group row">

									  <select class="form-control" name="credit" id="credit">

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

									  <select class="form-control" name="grade" id="grade">

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