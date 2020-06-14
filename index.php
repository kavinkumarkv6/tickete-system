<?php include( "header.php" ); ?>
<section class="section">
    <div class="section-body">
      	<div class="row">
        	<div class="col-12 col-md-12 col-lg-12">
        		<div class="card">
        			<div class="card-header">
        				<h4>View Tickets</h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		                <a href="new_ticket.php">
		                  <button class="btn btn-primary">New-Ticket</button>
		                </a>
        			</div>

        			<div class="card-body">
        			<?php
        				$url    = "https://desk.zoho.in/api/v1/tickets?include=contacts,assignee,departments,team,isRead";   
        				// /7189000001594041
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL,$url);
						curl_setopt($ch, CURLINFO_HEADER_OUT, true);

						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_HTTPHEADER,array(
															'Content-Type: application/json',
															'orgId:60001280952',
															'Authorization:2e4740934d006ac74de79025ce3ed073'));
						$result = json_decode( curl_exec($ch),true );
						curl_close($ch);
						$gat_data = $result['data'];						
					?>
					<table class="table table-bordered" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th>Ticked No</th>
								<th>Email</th>
								<th>Subject</th>
								<th>Create Time</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								for( $i=0;$i<count( $gat_data );$i++ )
								{
							?>
									<tr>
										<td>
											<?php echo $i+1; ?>
										</td>
										<td>
											<?php echo $gat_data[$i]['ticketNumber']; ?>
										</td>
										<td>
											<?php echo $gat_data[$i]['email']; ?>
										</td>
										<td>
											<?php echo $gat_data[$i]['subject']; ?>
										</td>
										<td>
											<?php echo $gat_data[$i]['createdTime']; ?>
										</td>
									</tr>
							<?php
								}
							?>
						</tbody>
					</table>
        			</div>
        		</div>
      		</div>
      	</div>
	</div>
</section>
<?php include( "footer.php" ); ?>