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
                	<table class="table table-bordered table-striped ">
					  <thead>
						<tr>
						  <th>#</th>
						  <th>Reg No.</th>
						  <th>Department</th>
						  <th>Semester</th>
						  <th>GPA</th>
						  <th>CGPA</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row"><?= $i+1 ?></th>
						  <td><?= $results[$i]['reg_no'] ?></td>
						  <td><?= $results[$i]['dept_name'] ?></td>
						  <td><?= $results[$i]['semester'] ?></td>
						  <td><?= $results[$i]['gpa'] ?></td>
							<td><?= $results[$i]['cgpa'] ?></td>
						</tr>
					  </tbody>
					</table>
                </div>
                
                
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