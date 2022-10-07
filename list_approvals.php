<?php
session_start();
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';

$fetch="SELECT approval_level.*,login.*,login.id as user_id from login JOIN approval_level ON(login.level_id=approval_level.id) where approve_status=0;";

$query = sqlsrv_query($conn, $fetch);

?>




</style>

<!-- Content -->
        <div class="page-wrapper bg-wrapper">
           <div class="content">
				<div class="buy-form">
				 <h4 class="page-title">Pending Approvals</h4>

				
			<p>

				<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Email</th>
											<th>KHRC Code</th>
											<th>Level</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

									<?php

											 try {

											 	$counter=1;

												while($r=sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC))
												{

													$id=$r['user_id'];
												?>
													<tr> 
													    <td><?php echo $counter;?></td>	
														<td><?php echo $r['fname'];?></td>
														<td><?php echo $r['lname'];?></td>
														<td><?php echo $r['stage_name'];?></td>
														<td><a href='<?php echo "approval_form.php?id=$id" ?>'>approve</a> </td>	
													</tr>

											    <?php

											       	$counter=$counter+1;
											        }


										      }catch (Exception $e) {
                                                      echo "<tr><td colspan='8'>Caught exception: ",  $e->getMessage(), "\n","</tr></td>";
                                               } 										      


										     ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
        </p>
    <div class="sidebar-overlay" data-reff=""></div>
 
      
