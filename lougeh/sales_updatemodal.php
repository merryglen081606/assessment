<!-- Edit -->
<!-- Edit Edit Sales Transaction Information -->

<div class="modal fade" id="edit_<?php echo $row['transaction_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Sales Transaction Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sales_update.php">
			
										
					<div class="row form-group">

		

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Transaction ID:*</label>
					</div>
					<div class="col-sm-10">
						<input readonly class="form-control" name="transaction_id" value="<?php echo $row['transaction_id']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="item_id" value="<?php echo $row['item_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Quantity:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" required class="form-control" name="quantity" value="<?php echo $row['quantity']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Unit Price:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="unit_price" value="<?php echo $row['unit_price']; ?>">
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Amount:</label>
					</div>
					<div class="col-sm-10">
						<input type="timestamp" class="form-control" name="amount" value="<?php echo $row['amount']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Sales Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="timestamp" class="form-control" name="date" value="<?php echo $row['date']; ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

