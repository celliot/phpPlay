<html>
<head>
</head>
<body>
<div>
<?php
	$isCookie = "setCookie never went off";
	$isCookie = (setCookie("existingUser", $username, time()+3600*24, "/") ? "Cookie Set" : "setCookie() Failed" );
	print_r $isCookie;
?>
</div>
</body>
</html>