<?php
		/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', '');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
		  die("ERROR: Could not connect. " . $mysqli->connect_error);
}
  
		$sql = "CREATE DATABASE IF NOT EXISTS bluecrystalshop";
		$createDB = $mysqli-> query($sql);
		$mysqli = new mysqli("localhost", "root", "", "bluecrystalshop"); 

		$create1="CREATE TABLE IF NOT EXISTS users(
		id int(9) NOT NULL AUTO_INCREMENT,
		username varchar(255) NOT NULL, 
		password varchar(255) NOT NULL,
		created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY(id)
		)";
		if ($mysqli->query($create1) === TRUE) {

		} else {

		}

		$create2="CREATE TABLE IF NOT EXISTS products(
		id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		title varchar(255) NOT NULL,
		price decimal(10,2) NOT NULL,
		list_price decimal(10,2) NOT NULL,
		categories int(11) NOT NULL,
		brand int(11) NOT NULL,
		images varchar(255) NOT NULL,
		description varchar(255) NOT NULL,
		featured int(11) NOT NULL
		)";
		if ($mysqli->query($create2) === TRUE) {

		} else {

		}

		$insert1 = "INSERT IGNORE INTO products(id, title, price, list_price, categories, brand, images, description, featured)
		VALUES
		(1,'Levis Jeans',29.99,39.99,1,1,'../images/levis.jpg','These Levis Jeans are wonderful. Buy them now.',1),
			(2,'Angel Backpack',20.99,29.99,1,2,'../images/avon-angel-backpack.jpg','This Backpack is awesome. Buy one now.',1),
			(3,'Underwire Bra',15.99,26.99,1,2,'../images/avon-daphne-uwire-bra.jpg','These brassieres are wonderful. Buy them now.',1),
			(4,'Foot Powder',29.99,39.99,1,2,'../images/avon-deo-foot-powder.jpg','This Foot Powder is amazing. Buy now.',1),
			(5,'Fendo Umbrella',29.99,39.99,1,2,'../images/avon-fendo-umbrella.jpg','These Umbrellas are cool. Buy now.',1),
			(6,'Men Hair/Body Wash',29.99,39.99,1,2,'../images/avon-hair-body-wash-m.jpg','This Body Wash is Amazing. Buy now.',1),
			(7,'High Cut Briefs',29.99,39.99,1,2,'../images/avon-liam-5in1-hc-briefs.jpg','These High Cut Briefs are wonderful. Buy them now.',1),
			(8,'Silverhoop Earrings',29.99,39.99,1,6,'../images/Billys-Western-Wear-SilverHoop-Earings.png','These Earrings are wonderful. Buy them now.',1),
			(9,'Baptism Dress',29.99,39.99,1,7,'../images/Toddler-Girl-Baptism-Dress.jpg','This Baptism Dress is wonderful. Buy it now.',1),
			(10,'Denim Shirt',29.99,39.99,1,3,'../images/Denim-shirts-m1.jpg','These Denim Shirts are wonderful. Buy them now.',1),
			(11,'Denim Shirt 2',29.99,39.99,1,3,'../images/Denim-shirts-m2.jpg','These Denim Shirts are wonderful. Buy them now.',1),
			(12,'Denim Shirt 3',29.99,39.99,1,3,'../images/Denim-shirts-m3.jpg','These Denim Shirts are wonderful. Buy them now.',1),
			(13,'Denim Shirt 4',29.99,39.99,1,3,'../images/Denim-shirts-m4.jpg','These Denim Shirts are wonderful. Buy them now.',1),
			(14,'Upside Down Necklace',29.99,39.99,1,4,'../images/lv-upside-down-necklace.jpg','This Necklace is very beautiful. Buy it now.',1),
			(15,'Lock Solid Chain',29.99,39.99,1,4,'../images/lv-lock-solid-chain.jpg','These Chain Lock are wonderful. Buy them now.',1),
			(16,'Brass Lock and Key',29.99,39.99,1,4,'../images/lv-brass-lock-and-key.jpg','These Lock and Key are wonderful. Buy them now.',1),
			(17,'LV Colar',29.99,39.99,1,4,'../images/lv-colar.jpg','These Colar are wonderful. Buy them now.',1),
			(18,'Vivienne Necklace',29.99,39.99,1,4,'../images/lv-vivienne-necklace.jpg','This necklace is wonderful. Buy them now.',1),
			(19,'Gold Necklace',29.99,39.99,1,4,'../images/lv-m68127-gold.jpg','This necklace is wonderful. Buy now.',1),
			(20,'Pearl Earrings',29.99,39.99,1,7,'../images/mabe.jpg','These Earrings are wonderful. Buy them now.',1),
			(21,'Frock Dress',29.99,39.99,1,7,'../images/pretty-baby-girl-frock.jpg','These Dress are wonderful. Buy one now.',1),
			(22,'Evening Gown',29.99,39.99,1,7,'../images/pretty-lace-hi-low-lace-flower-girl-evening-gown.jpg','This Evening Gown is so Beautiful. Buy one now.',1),
			(23,'Gold Ruby Set',29.99,39.99,1,7,'../images/guangxi-china-pure-gold-ruby-jewelry-set.jpg','These T-shirt and shorts set are wonderful. Buy now.',1),
			(24,'T-shirt and Short set',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-t-shirt-short-set.jpg','These T-shirt and shorts set are wonderful. Buy now.',1),
			(25,'T-shirt and Short set 2',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-t-shirt-short-set2.jpg','These T-shirt and shorts set are wonderful. Buy now.',1),
			(26,'T-shirt and Short set 3',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-t-shirt-short-set3.jpg','These T-shirt and shorts set are wonderful. Buy now.',1),
			(27,'T-shirt and Short set 4',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-t-shirt-short-set4.jpg','These T-shirt and shorts set are wonderful. Buy now.',1),
			(28,'T-shirt and Short set 5',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-t-shirt-short-set5.jpg','These T-shirt and shorts set are wonderful. Buy now.',1),
			(29,'Baby Boy Shorts',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-short.jpg','These shorts are wonderful. Buy them now.',1),
			(30,'Baby Boy Shorts 2',29.99,39.99,1,5,'../images/Evelin-lee-baby-boy-short2.jpg','These shorts are wonderful. Buy them now.',1),
			(31,'Flower Girl Dress',29.99,39.99,1,7,'../images/davids-satin-flower-girl-dress.jpg','These dress are wonderful. Buy them now.',1),
			(32,'Ballroom Dress',29.99,39.99,1,7,'../images/2018-Latin-Dance-Dress-Children-Girls-Ballroom-Dance-Dress.jpg','These dress are wonderful. Buy them now.',1)";
			if ($mysqli->query($insert1) === TRUE) {

			} else {

			}
			$create3="CREATE TABLE brand(
			id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			brand varchar(255) NOT NULL
			)";
			if ($mysqli->query($create3) === TRUE) {

			} else {

			}

			$insert2 = "INSERT IGNORE INTO brand(id,brand)
			VALUES(1,'Levis'),
					(2,'Avon'),
					(3,'Denim'),
					(4,'Louis Vuitton'),
					(5,'Lee'),
					(6,'Billy'),
					(7,'Unknown')";
			if ($mysqli->query($insert2) === TRUE) {

			} else {

			}

		$create4="CREATE TABLE IF NOT EXISTS shopping_cart(
		id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		cart_item varchar(255) NOT NULL,
		price decimal(10,2) NOT NULL,
		quantity int(11) NOT NULL,
		images varchar(255) NOT NULL,
		username varchar(255) NOT NULL
		)";
		if ($mysqli->query($create4) === TRUE) {

		} else {

		}
?>
