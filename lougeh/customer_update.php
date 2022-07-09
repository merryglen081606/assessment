<?php
    session_start();
	include_once('connection.php');

    if(isset($_POST['edit'])){
		$customer_id = $_POST['customer_id'];
		$customer_name = $_POST['customer_name'];
		$contact_no = $_POST['contact_no'];
		$address = $_POST['address'];

		$sql = "UPDATE customers_tbl SET customer_id = '$customer_id',customer_name = '$customer_name',contact_no = '$contact_no',address = '$address' WHERE customer_id = '$customer_id'";



		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating customer';
		}
	}
	else{
		$_SESSION['error'] = 'Select customer to edit first';
	}

	header('location: customer.php');
?>