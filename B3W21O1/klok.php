<!DOCTYPE html>
<html lang="nl">
<head>
	<link rel="stylesheet" type="text/css" href="klok.css">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>
	<meta http-equiv="refresh" content="60">
</head>
<body>
	<div id="container">
		<?php
			date_default_timezone_set("Europe/Amsterdam");
			$t = date("G");

			if ($t < "6") {
			    echo "Goeden nacht!";
			    echo '<body style="background-image:url(backgrounds/night.png)">';
			}
			elseif ($t < "12") {
			    echo "Goeie morgen!";
			    echo '<body style="background-image:url(backgrounds/morning.png)">';
			} 
			elseif ($t < "18") {
			    echo "Goeden middag!";
			    echo '<body style="background-image:url(backgrounds/afternoon.png)">';
			}
			elseif ($t < "24") {
			    echo "Goeden avond!";
			    echo '<body style="background-image:url(backgrounds/evening.png)">';
			}
			
			echo "<br>Het is nu " . date("G:i");
		?>
	</div>
</body>
</html>