<?php
			require_once 'core/config.php';
			$num = 0;
			$sql = "SELECT * FROM products p JOIN brand b WHERE p.title = 'Levis Jeans' && p.brand = b.id";
			$featured = $mysqli -> query($sql);
			$product = mysqli_fetch_assoc($featured);
			$num += 1;
?>
<div class="modal fade details-1" id="details-1" tableindex="-1"  role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times; </span>
				</button>
				<h4 class="modal-title text-center"><?= $product['title']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="<?= $product['images']; ?>" alt="Levis Jeans" class="details img-responsive"/>
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p><?= $product['description']; ?></p>
							<p>Price: $<?= $product['price']; ?></p>
							<p>Brand: <?= $product['brand'] ?></p>
							<form action="add_cart.php" method="post">
								<div class="col-xs-3">
									<div class="form-group">
											<label for="quantity" id="quantity-label">Quantity:</label>
											<input type="text" class="form-control" id="quantity" name="quantity"/>
									</div>
									<div class="form-group">
										<label for="size" id="size-label">Size:</label>
										<select name="size" id="size" class="form-control">
											<option value=""></option>
											<option value="28">28</option>
											<option value="30">30</option>
											<option value="32">32</option>
										</select>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Close</button>
						<button class="btn btn-warning" type="submit"><span class="glyphicon-shopping-cart"></span>Add to Cart</button>
			</div>
		</div>
	</div>
</div>
