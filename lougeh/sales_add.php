<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
	
		$item_id = $_POST['item_id'];
        $quantity = $_POST['quantity'];
        $unit_price = $_POST['unit_price'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];
		$sql = "INSERT INTO suppliers_tbl (item_id,quantity,unit_price,amount,date) VALUES ('$item_id', '$quantity','$unit_price','$amount','$date')";

		
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

	header('location: sales_transaction.php');
?>