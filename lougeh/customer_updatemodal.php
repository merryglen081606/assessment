<!-- Edit Customer's Information -->


<div class="modal fade" id="edit_<?php echo $row['customer_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Customer's Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="customer_update.php">
				<input type="hidden" class="form-control" name="customer_id" value="<?php echo $row['customer_id']; ?>">

										
					<div class="row form-group">
		

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control" name="customer_id" value="<?php echo $row['customer_id']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Customer's Full Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="customer_name" value="<?php echo $row['customer_name']; ?>">
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact No.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="contact_no" value="<?php echo $row['contact_no']; ?>">
					</div>
				</div>
			


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="address" value="<?php echo $row['address']; ?>">
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

