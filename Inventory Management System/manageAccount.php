<?php
	include("manageAccountAction.php");
?>

<html html class="html">	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Manage Account</title>
		<link rel="stylesheet" type="text/css" href="styling.css">
	</head>
	<body>
		<div class="wrap">

            <form method="post">
		
			<label class="label">Current Username</label>
			<input type="text" name="username" id="username" required/>
			<div class="bar">
				<i></i>
			</div>
			<label class="label">New Username</label>
			<input type="text" name="newUsername" id="newUsername" required/>
			<div class="bar">
				<i></i>
			</div>
			<label class="label">Current Password</label>
			<input type="password" name="currentPassword" id="currentPassword" required/>
			<div class="bar">
				<i></i>
			</div>
			<label class="label">New Password</label>
			<input type="password" name="newPassword" id="newPassword" required/>
			<div class="bar">
				<i></i>
			</div>
			<label class="label">Confirm new Password</label>
			<input type="password" name="confirmPassword" id="confirmPassword" required/>
			<button class="wrapButton" name="submit" onclick="manageAccountAction">Submit</button>
			<div class="error">
				<?php echo $error; ?>
			</div>
			</form>
		</div>
		<div class="center">
			<a class="label" href="login.php">return to index</a>
		</div>
	</body>
</html>