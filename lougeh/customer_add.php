<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$customer_name = $_POST['customer_name'];
		$contact_no = $_POST['contact_no'];
        $address = $_POST['address'];
		$sql = "INSERT INTO customers_tbl (customer_name, contact_no,address) VALUES ('$customer_name', '$contact_no','$address')";

		
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

	header('location: customer.php');
?>