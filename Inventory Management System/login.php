<?php
	session_start();
	include("indexAction.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
	<form method="post">
		<div class="wrap">
            <div class="center">
            <p class="label">Welcome admin!</p>
            </div>
		<div class="avatar">
		<img src="admin.png">
        </div>
            
		<input type="text" id="username" placeholder="username" name="username" required>
		<input type="password" id="password" placeholder="password" name="password" required>
		<button class="wrapButton" id="submit" onclick="indexAction.php">Sign in</button>
        <div class="error">
            <?php echo $error; ?>
        </div>
        </div>
	</form>
    <div class="center">
        <a class="label" href="manageAccount.php">Manage Account</a><br>
        <a class="label" href="main.html">back to main page</a> 
    </div>
	<p class="default">default username: admin</br>default password: admin</p>

</body>
</html>