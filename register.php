<html>
<head>
<script type="text/javascript" src="scripts/myScripts.js"></script>
</head>
<?php
	function noDetails(){
?>
		<body>
		<div>One or more required fields were not correctly set, please return <a href="registration.php">here</a></div>
		</body>
		</html>
<?php
	}
	
	$input = "";
	if(isset($_POST['firstname'])){
		$firstname = $_POST['firstname'];
		$input = $input."".$firstname."/n";
	} else {
		noDetails();
	}
	if(isset($_POST['surname'])){
		$surname = $_POST['surname'];
		$input = $input."".$surname."/n";
	} else {
		noDetails();
	}
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$input = $input."".$username."/n";
	} else {
		noDetails();
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
		$input = $input."".$password."/n";
	} else {
		noDetails();
	}
	$fp = "users\\".$username.".txt";
	
	fclose($userfile);
	
	if (!file_exists($fp)) {
		$userFile = fopen($fp, "w");
		fwrite($userFile, $input);
		setCookie("existingUser", $username, time()+3600*24, "/");
		fclose($userFile);
?>
<body onload="goHome()"></body></html>
<?php
	}
?>
<body>
<div>
<p>Username is already in use, please <a href="registration.php">try again</a>
</div>
</body>
</html>