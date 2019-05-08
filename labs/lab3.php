<?php
	echo "<h1>lab3: Rekenen</h1>";
	echo "<hr>";
	$x = (rand(10,100));
	$y = (rand(10,100));
	echo $x * $y. "<br>";
	echo $x + $y. "<br>";
	echo $x - $y. "<br>";
	echo $x / $y;
?>
<?php
	function calculation($number) {
		echo "<br>";
		for ($x = 1; $x <= 10; $x++) {
		 	echo "$x * 6 =" .$x * $number;
		 	echo "<br>";
		} 
	}
	calculation(6)
?>

<?php
	$number = array("3","5","8","12");
	foreach($number as $x => $x_value) {
	    echo  $x * $x_value;
	    echo "<br>";
	}
?>

