<?php
	include('include/db.php');
	if(isset($_REQUEST['dept'])){
		$dept = $_REQUEST['dept'];
		$query = "SELECT * FROM students JOIN results USING (reg_no, semester) WHERE dept_name = '$dept' ";
	} else {
		$query = "SELECT * FROM students JOIN results USING (reg_no, semester) ";	
	}
	
	$statement = $db->prepare($query);
	$statement->execute() or die("Couldn't Connect");
	if($statement->execute()) {
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
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
                	<table class="table table-bordered table-striped ">
					  <thead>
						<tr>
						  <th>#</th>
						  <th>Reg No.</th>
						  <th>Department</th>
						  <th>Semester</th>
						  <th>GPA</th>
						  <th>CGPA</th>
						  <th>Action</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php for($i = 0; $i < count($results); $i++): ?>
						<tr>
						  <th scope="row"><?= $i+1 ?></th>
						  <td><?= $results[$i]['reg_no'] ?></td>
						  <td><?= $results[$i]['dept_name'] ?></td>
						  <td><?= $results[$i]['semester'] ?></td>
						  <td><?= $results[$i]['gpa'] ?></td>
						  <td><?= $results[$i]['cgpa'] ?></td>
						  <td>
						  	<a href="edit.php?reg_no=<?= $results[$i]['reg_no'] ?>"><i name="edit"  class="fa fa-pencil btn btn-warning" > Edit</i></a>
						  	<a onclick="return confirmDelete()" href="delete.php?reg_no=<?= $results[$i]['reg_no'] ?>"  ><i name="delete"  class="fa fa-trash-o btn btn-danger" > Delete</i></a>
						  </td>
						</tr>
						<?php endfor; ?>
					  </tbody>
					</table>
                </div>
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
	
		<!-- footer	-->
		
		
		
		<?php
			include('common/footer.php');
		?>
		