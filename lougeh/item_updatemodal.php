<!-- Edit Products Information -->


<div class="modal fade" id="edit_<?php echo $row['item_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Product Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="item_update.php">
				<input type="hidden" class="form-control" name="item_id" value="<?php echo $row['item_id']; ?>">

										
					<div class="row form-group">
                    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item ID:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" readonly class="form-control" name="item_id" value="<?php echo $row['item_id']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Name:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="product_name" value="<?php echo $row['product_name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Barcode:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="barcode" value="<?php echo $row['barcode']; ?>">
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
						<label class="control-label modal-label" >Quantity Type :*</label>
					</div>
					<div class="col-sm-10">
					<select id="quantity_type" class="form-control" name="quantity_type"  value="<?php echo $row['quantity_type']; ?>>
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
						<input type="number" class="form-control" name="cost_per_item" value="<?php echo $row['cost_per_item']; ?>">
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
						<label class="control-label modal-label">Description:*</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar" class="form-control" name="description" value="<?php echo $row['description']; ?>">
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

