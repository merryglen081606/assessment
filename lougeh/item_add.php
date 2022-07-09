
<?php
	session_start();
	include_once('connection.php');


	if(isset($_POST['add'])){
		$product_name = $_POST['product_name'];
		$barcode = $_POST['barcode'];
		$quantity = $_POST['quantity'];
        $quantity_type = $_POST['quantity_type'];
		$cost_per_item = $_POST['cost_per_item'];
		$unit_price = $_POST['unit_price'];
        $description = $_POST['description'];



		$sql = "INSERT INTO items_tbl (product_name,barcode, quantity, quantity_type,cost_per_item,unit_price,description) VALUES ('$product_name','$barcode','$quantity','$quantity_type', '$cost_per_item','$unit_price','$description')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Item added successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: item.php');
?>