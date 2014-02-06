<html>
<head>
</head>
<body>
<div>
<?php
	$isCookie = "setCookie never went off";
	$isCookie = (setCookie("existingUser", "blah", time()+3600*24, "/") ? "Cookie Set" : "setCookie() Failed" );
	echo $isCookie;
	$isCookie = isset($_COOKIE["existingUser"]) ? "<br>Cookie is still valid" : "<br>Cookie successfully expired";
	echo $isCookie;
	setCookie("existingUser", "blah", time()-3600, "/");
	$isCookie = isset($_COOKIE["existingUser"]) ? "<br>Cookie is still valid" : "<br>Cookie successfully expired";
	echo $isCookie;
	setCookie("existingUser", "blah", time()+3600, "/");
?>
</div>
</body>
</html>