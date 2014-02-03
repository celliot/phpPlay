<?php
	echo "hello world ";
	
	echo date("g:i a (j  F o)", strtotime('+10 hours'));
	echo "<br>";
	
	$a = 1;
	$b = 2;
	
	if (($a + $b)== 3)
		echo "1 + 2 = 3";
	else
		echo "bad at maths";
	echo "<br>";
	
	$grade = $a * $b * $b;
	
	echo ($grade>10 ? "How was that greater than 10?" : "1 x 2 x 2 = 4 silly");
	
	
	echo "<h2>Two Times Table</h2>";
	echo "<br>";
	for($mult = 1;$mult<=12;++$mult) {
		echo "2 x ".$mult." = ".(2 * $mult)."<br>";
	}
	
?>