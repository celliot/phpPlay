<html>
<head>
<style>
label, input {
  display: inline-block;
}
label {
  min-width: 80px;
}
</style>
</head>
<body>
<div>
<form method="post" action="register.php">
<label for="firstname">First Name:</label><input type="text" id="firstname" name="firstname"><br>
<label for="surname">Surname:</label><input type="text" id="surname" name="surname"><br>
<label for="userName">User Name:</label><input type="text" id="username" name="username"><br>
<label for="password">Password:</label><input type="password" id="password" name="password"><br>
<input type="submit" value="Register">
</form>
</div>
</body>
</html>