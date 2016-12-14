<?php
	require "lib/Tank.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF8">
		<title>OOP</title>
	</head>

	<body>
		<?php
			$leopard 	= new Tank("Leopard");
			$jaguar 	= new Tank("Jaguar", 120);

			echo $leopard->drive();
			echo "<br>";
			echo $jaguar->drive();
			echo "<br>";
			echo $leopard->shoot($jaguar);
			echo "<br>";

			for ($i=0; $i < 20; $i++) { 
				$leopard->shoot($jaguar);
			}

			echo $leopard->shoot($jaguar);
			echo "<br>";
			echo $leopard->type ." is out of ammo!";
		?>
	</body>
</html>