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