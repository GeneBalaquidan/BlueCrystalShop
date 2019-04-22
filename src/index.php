<?php
// Initialize the session
session_start();
 require_once "core/config.php";
// Check if the user is logged in, if not then redirect him to login page
if((!isset($_SESSION["loggedin"])) || ($_SESSION["loggedin"] !== true)){
    header("location: login.php");
    exit;
}

	$sql = "SELECT * FROM products WHERE featured = 1";
	$featured = $mysqli-> query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Blue Crystal Shop</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href"css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<meta name="vewport" content="width=device-width, initial-scale=1,user-scaleable=no">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 
	include 'connect.html';
?>
<div id="background-Image">
		<div>
			<p id="text1">E-Commerce</p>
			<p id="text2">small business resources</p>
		</div>
		<div id="image1"></div>
</div>

<div class="col-md-2"></div>



<div class="col-md-8">
	<div class="row">
		<h2 class="text-center">
			Featured Products	
		</h2>
		<?php
			$num=0;
			while($product = mysqli_fetch_assoc($featured)) :
			$num = $num + 1;

		?>
		<div class="col-md-3">

			<h4><?= $product['title']; ?></h4>
			<img src="<?= $product['images']; ?>" alt="<?= $product['title']; ?>" id="images"/>
			<p class="list-price text-danger">List Price: <s>$<?= $product['list_price']; ?></s></p>
			<p class="price">Our Price: $<?= $product['price']; ?></p>
			<button type="buttom"  class="btn btn-success" data-toggle="modal" data-target="#details-<?=$num ?>">Details</button>
		</div>
		<?php

		endwhile;
		?>
	</div>
	<footer ckass-"text-center" id="footer">&copy; Copyright 2018-2019 Blue Crystal Shop</footer>
</div>

<?php
	include '../modal/details-modal-levis.php';
	include '../modal/details-modal-angel-backpack.php';
	include '../modal/details-modal-daphne-bra.php';
	include '../modal/details-modal-baby-boy-short.php';
	include '../modal/details-modal-baby-boy-short2.php';
	include '../modal/details-modal-ballroom-dress.php';
	include '../modal/details-modal-baptism-dress.php';
	include '../modal/details-modal-brass-lock-and-key.php';
	include '../modal/details-modal-daphne-bra.php';
	include '../modal/details-modal-denim-shirts-m1.php';
	include '../modal/details-modal-denim-shirts-m2.php';
	include '../modal/details-modal-denim-shirts-m3.php';
	include '../modal/details-modal-denim-shirts-m4.php';
	include '../modal/details-modal-evening-gown.php';
	include '../modal/details-modal-fendo-umbrella.php';
	include '../modal/details-modal-flower-girl-dress.php';
	include '../modal/details-modal-foot-powder.php';
	include '../modal/details-modal-frock-dress.php';
	include '../modal/details-modal-gold-necklace.php';
	include '../modal/details-modal-gold-ruby-set.php';
	include '../modal/details-modal-lock-solid-chain.php';
	include '../modal/details-modal-lv-colar.php';
	include '../modal/details-modal-pearl-earrings.php';
	include '../modal/details-modal-shirt-and-short.php';
	include '../modal/details-modal-shirt-and-short2.php';
	include '../modal/details-modal-shirt-and-short3.php';
	include '../modal/details-modal-shirt-and-short4.php';
	include '../modal/details-modal-shirt-and-short5.php';
	include '../modal/details-modal-silverhoop-earrings.php';
	include '../modal/details-modal-upside-down-necklace.php';
	include '../modal/details-modal-vivienne-necklace.php';
	include '../modal/details-modal-avon-briefs.php';
	include '../modal/details-modal-body-wash.php';
?>
</body>
</html>