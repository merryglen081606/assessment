<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
        $item_id = $_POST['item_id'];
		$product_name = $_POST['product_name'];
		$barcode = $_POST['barcode'];
		$quantity = $_POST['quantity'];
        $quantity_type = $_POST['quantity_type'];
		$cost_per_item = $_POST['cost_per_item'];
		$unit_price = $_POST['unit_price'];
        $description = $_POST['description'];

		$sql = "UPDATE items_tbl SET item_id = '$item_id', product_name = '$product_name', barcode = '$barcode',quantity = '$quantity',quantity_type = '$quantity_type',cost_per_item = '$cost_per_item',unit_price= '$unit_price',description = '$description' WHERE item_id = '$item_id'";



		if($conn->query($sql)){
			$_SESSION['success'] = 'Item updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating item';
		}
	}
	else{
		$_SESSION['error'] = 'Select item to edit first';
	}

	header('location: item.php');

?>