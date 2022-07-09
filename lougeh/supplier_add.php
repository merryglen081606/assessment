<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$company_code = $_POST['company_code'];
		$company_name = $_POST['company_name'];
        $telephone_no = $_POST['telephone_no'];
        $phone_no = $_POST['phone_no'];
        $address = $_POST['address'];
		$sql = "INSERT INTO suppliers_tbl (company_code, company_name,telephone_no,phone_no,address) VALUES ('$company_code', '$company_name','$telephone_no','$phone_no','$address')";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added successfully';
		}

		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: supplier.php');
?>