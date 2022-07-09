<!-- Edit Suppliers Information-->


<div class="modal fade" id="edit_<?php echo $row['supplier_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Supplier's Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="supplier_update.php">
				<input type="hidden" class="form-control" name="supplier_id" value="<?php echo $row['supplier_id']; ?>">

										
					<div class="row form-group">
		

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Code:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="company_code" value="<?php echo $row['company_code']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="company_name" value="<?php echo $row['company_name']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telephone:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" required class="form-control" name="telephone_no" value="<?php echo $row['telephone_no']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="phone_no" value="<?php echo $row['phone_no']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
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

