<!-- Add New Product Information-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="item_add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="product_name" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Barcode.:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="barcode" >
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Quantity:*</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="quantity" >
					</div>
				</div>


                <div class="row form-group">
					<div class="col-sm-2">
						<label required class="control-label modal-label">Quantity Type :*</label>
					</div>
					<div class="col-sm-10">
					<select id="quantity_type" class="form-control" name="quantity_type"  >
                        <option value="">Choose Option</option>
								  <option value="Ounce">Ounce</option>
								  <option value="Kilo">Kilo</option>
                                  <option value="Dozen">Dozen</option>
                                  <option value="Pieces">Pieces</option>
					</select>
					</div>

				</div>
				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cost Per Item:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="cost_per_item" >
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Unit Price:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="unit_price" >
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Decription:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="description" >
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