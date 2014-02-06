<html>
<head>
<script type="text/javascript" src="scripts/jquery-1.11.0.js"></script>
<script type="text/javascript" src="scripts/myScripts"></script>
<?php
	function loggedIn($currentUser) {
		?>
		<body>
		<div>
		Welcome <?php echo $currentUser ?>
		</div>
		<form action="index.php" method="post">
			<input type="hidden" name="logOutUser" value="<?php echo $currentUser ?>"></input>
			<a href="#" class="logout">logout</a>
		</form>
		</body>
		<script type="text/javascript">
	$('.logout').click(function(tag) {
		<?php setCookie("existingUser", $currentUser, time()-3600, "/"); ?>
		tag.preventDefault();
		$(this).parents('form').submit();
	});
</script>
		<?php
	}
?>
</head>
<?php
	if (isset($_POST['username'])){
		$username = $_POST['username'];
		$filePath = "users\\".$username.".txt";
		if (isset($_POST['password'])){
			$password = $_POST['password'];
			if (file_exists($filePath)){
				$userFile = file($filePath);
				?>
				<body>
				<?php
				//$userFile[3] is where password is stored
				if (strcmp(trim($userFile[3]), trim($password)) == 0){
					setCookie("existingUser", $username, time()+3600*24, "/");
					loggedIn($username);
				}
			}
		}
	} else if (isset($_COOKIE['existingUser'])) {
		loggedIn($_COOKIE['existingUser']);
	}
	else {
	?>
	<body onload="goIndex()">
	</body>
	<?php } ?>
</html>