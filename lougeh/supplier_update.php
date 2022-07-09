<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){

		$supplier_id = $_POST['supplier_id'];
		$company_code = $_POST['company_code'];
		$company_name = $_POST['company_name'];
		$telephone_no = $_POST['telephone_no'];
		$phone_no = $_POST['phone_no'];
		$address = $_POST['address'];

		$sql = "UPDATE suppliers_tbl SET company_code = '$company_code',company_name = '$company_name',telephone_no = '$telephone_no',phone_no = '$phone_no',address = '$address' WHERE supplier_id = '$supplier_id'";



		if($conn->query($sql)){
			$_SESSION['success'] = 'Supplier updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating supplier';
		}
	}
	else{
		$_SESSION['error'] = 'Select supplier to edit first';
	}

	header('location: supplier.php');

?>