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
						  <th>Name</th>
						  <th>Department</th>
						  <th>Semester</th>
						  <th>CGPA</th>
						  <th>Action</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>1422</td>
						  <td>Otto</td>
						  <td>CSE</td>
						  <td>4th</td>
						  <td>3.00</td>
						  <td>
						  	<a href="edit.php"><i name="edit"  class="fa fa-pencil btn btn-warning" > Edit</i></a>
						  	<a href="delete.php"><i name="delete"  class="fa fa-trash-o btn btn-danger" > Delete</i></a>
						  </td>
						</tr>
						<tr>
						  <th scope="row">1</th>
						  <td>1422</td>
						  <td>Otto</td>
						  <td>CSE</td>
						  <td>4th</td>
						  <td>3.00</td>
						  <td>
						  	<a href="edit.php"><i name="edit"  class="fa fa-pencil btn btn-warning" > Edit</i></a>
						  	<a href="delete.php"><i name="delete"  class="fa fa-trash-o btn btn-danger" > Delete</i></a>
						  </td>
						</tr>
						<tr>
						  <th scope="row">1</th>
						  <td>1422</td>
						  <td>Otto</td>
						  <td>CSE</td>
						  <td>4th</td>
						  <td>3.00</td>
						  <td>
						  	<a href="edit.php"><i name="edit"  class="fa fa-pencil btn btn-warning" > Edit</i></a>
						  	<a href="delete.php"><i name="delete"  class="fa fa-trash-o btn btn-danger" > Delete</i></a>
						  </td>
						</tr>
						
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