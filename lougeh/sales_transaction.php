

<?php

include('navigation_sales.php');
?>

<div class="container">
	<h1 class=" text-center">Sales Transaction Information</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
	
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Transaction ID</th>
						<th>Product</th>
						<th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Amount</th>
                        <th>Sales Date</th>
                        <th>Action</th>
                       
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM sale_transaction";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['transaction_id']."</td>
									<td>".$row['item_id']."</td>
                                    <td>".$row['quantity']."</td>
									<td>".$row['unit_price']."</td>
                                    <td>".$row['amount']."</td>
                                    <td>".$row['date']."</td>

									<td>
										<a href='#edit_".$row['transaction_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
									
									</td>
								</tr>";
								include('sales_updatemodal.php');
							}
				

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('sales_addmodal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>

<script>
$(document).ready(function(){

    $('#myTable').DataTable();

  
});
</script>


 </section>
 

  <?php

?>


</body>
</html>