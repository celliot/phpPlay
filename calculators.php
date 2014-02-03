<html>
<head>
<title>Results</title>
</head>
<body>
<?php
	if(isset($_POST['heightincm'])){
	$heightincm = $_POST['heightincm'];
	echo "Height in Centimeters is: ".$heightincm."<br>";
	$heightininches = $heightincm / 2.54;
	$feet = floor ($heightininches / 12);
	$inches = $heightininches % 12;
	echo "Imperial height is ".$feet." feet and ".$inches." inches";
	}
	else echo "no value entered";
?>
</body>
</html>
