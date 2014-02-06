<?php
	if (isset($_POST['username'])){
		$username = $_POST['username'];
		if (isset($_POST['password'])){
			$password = $_POST['password'];
?>
<html><body><div>
<?php
	echo $username;
	echo "<br>";
	echo $password;
?>
</div></body></html>
<?php
		}
	}
?>
<html>
<body>
<div> Fail! </div>
</body>
</html>