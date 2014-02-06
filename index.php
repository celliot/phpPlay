<html>
<head>
<script type="text/javascript" src="scripts/myScripts.js"></script>
</head>
<?php
	if (isset($_COOKIE['existingUser'])) {
?>
	<body onload="goHome()">
	If you're seeing this you have successfully logged in but scripts have disabled.
	</body>
	</html>
<?php
	}
	else {
?>
	<body> 
	<div>
	<a href="registration.php">Register</a> / <a href="login.html">Login</a>
	</div>
	</body>
	</html>
<?php
	}
?>