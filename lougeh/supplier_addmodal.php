<!-- Add New Suppliers Information -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Supplier Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="supplier_add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Campany Code:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="company_code" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Company Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="company_name" required >
					</div>
				</div>
				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telephone No.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telephone_no" required >
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone No.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone_no"  required>
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:*</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address"  required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>