<?php 
include( "DBconfig/common_functions.php" );
$crud = new crud();

if( isset( $_POST['login'] ) )
{
	$email_id = $_POST['email'];
	$password = $_POST['password'];

	$select_query = "	SELECT * FROM url_user_registration_list 
						WHERE 
							url_user_email = '".$email_id."' AND 
							url_user_password = '".$password."' AND 
							user_status = 'active'";
	$get_details = $crud->getData( $select_query );
	if( !empty( $get_details ) )
	{
		$_SESSION['user_details'] = $get_details[0];
		echo "<script>window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('User name password are incorrect!');</script>";
		echo "<script>window.location.href='login.php';</script>";
	}
}


if( isset( $_POST['submit_ticket'] ) )
{
	$department   = $_POST['department'];
	$category     = $_POST['category'];
	$project_url  = $_POST['project_url'];
	$subject      = $_POST['subject'];
	$description  = $_POST['description'];
	$contact_name = $_POST['contact_name'];
	$contact_email= $_POST['contact_email'];
	$priority     = $_POST['priority'];
	$attachment   = $_FILES['attachment'];
	$user_id      = $_SESSION['user_details']['url_id'];

	$post_fields  = array(
						"subject" => $subject,
						"departmentId" => $department,
						"contactId" => $user_id,
						"email"   => $contact_email,
						"description" => $description,
						"category" => $category,
						// "webUrl"  => $project_url,
						"priority" => $priority,
						"status" => "Open"
					); 
	$url    = "https://desk.zoho.in/api/v1/tickets";   

    $data = json_encode( $post_fields );
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLINFO_HEADER_OUT, true);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $data  );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array(
										'Content-Type: application/json',
										'Content-Length: ' . strlen($data),
										'orgId:60001280952',
										'Authorization:2e4740934d006ac74de79025ce3ed073'));
	$result=curl_exec($ch);
	curl_close($ch);
	echo "<pre>";
	print_r( $result );

}

?>