<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
        $transaction_id = $_POST['transaction_id'];
		$item_id = $_POST['item_id'];
        $quantity = $_POST['quantity'];
        $unit_price = $_POST['unit_price'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];

		$sql = "UPDATE sale_transaction SET transaction_id = '$transaction_id', item_id = '$item_id',quantity = '$quantity',unit_price = '$unit_price',amount = '$amount',date = '$date' WHERE transaction_id  = '$transaction_id '";



		if($conn->query($sql)){
			$_SESSION['success'] = 'Sales updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating sales';
		}
	}
	else{
		$_SESSION['error'] = 'Select sales to edit first';
	}

	header('location: sales_transaction.php');

?>