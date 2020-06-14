<?php  include( "header.php" ); ?>
<section class="section">
    <div class="section-body">
      	<div class="row">
        	<div class="col-12 col-md-12 col-lg-12">
        		<div class="card">
        			<div class="card-header">
        				<h4>New Ticket</h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		                <a href="index.php">
		                  <button class="btn btn-primary">Back</button>
		                </a>
        			</div>
        			<div class="card-body">
						<form method="post" action="post_condition.php" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Department<span class="reqi">*</span></label>
										<select class="form-control" name="department" required>
											<?php 
												$select_dept = "SELECT * FROM department WHERE dp_status = 'active'";
												$get_dept    = $crud->getData( $select_dept ); 
												for( $i=0;$i<count( $get_dept );$i++ )
												{
											?>
													<option value="<?php echo $get_dept[$i]['dp_id']; ?>">
														<?php echo $get_dept[$i]['dp_name']; ?>
													</option>
											<?php
												}
											?>
										</select>
									</div>		
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Category<span class="reqi">*</span></label>
										<select class="form-control" name="category" required>
											<?php 
												$select_cat = "SELECT * FROM category WHERE ct_status = 'active'";
												$get_cat    = $crud->getData( $select_cat ); 
												for( $i=0;$i<count( $get_cat );$i++ )
												{
											?>
													<option value="<?php echo $get_cat[$i]['ct_id']; ?>">
														<?php echo $get_cat[$i]['ct_name']; ?>
													</option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>PWSLab Project URL<span class="reqi">*</span></label>
										<input type="text" name="project_url" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Subject<span class="reqi">*</span></label>
										<input type="text" name="subject" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Description<span class="reqi">*</span></label>
										<textarea class="form-control" name="description" required></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<strong>Contact Details</strong>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact Name<span class="reqi">*</span></label>
										<input type="text" name="contact_name" 
										value="<?php echo $_SESSION['user_details']['url_user_name']; ?>" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact Email<span class="reqi">*</span></label>
										<input type="email" name="contact_email" 
										value="<?php echo $_SESSION['user_details']['url_user_email']; ?>"
										 class="form-control" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<strong>Additional Information</strong>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Priority<span class="reqi">*</span></label>
										<select class="form-control" name="priority" required>
											<option value='high'>High</option>
											<option value='medium'>Medium</option>
											<option value='low'>Low</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Attach Files</label>
										<input type="file" name="attachment" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">&nbsp;</div>
								<div class="col-md-4">
									<div class="form-group">
										<input type="submit" name="submit_ticket" class="form-control btn-primary">
									</div>
								</div>
								<div class="col-md-4">&nbsp;</div>
							</div>
						</form>        				
        			</div>
        		</div>
      		</div>
      	</div>
	</div>
</section>
<?php include( "footer.php" ); ?>
