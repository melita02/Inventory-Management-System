<?php
    //connect to the server and select the database
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "supplier";
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   	$error = "";
   	$uploadOk = 1;
   	if($_SERVER["REQUEST_METHOD"] == "POST") {
      	// change username and password form
     	if(isset($_POST['submit'])){
		    $username = mysqli_real_escape_string($conn,$_POST['username']);
		    $newUsername = mysqli_real_escape_string($conn,$_POST['newUsername']);
		    $password = mysqli_real_escape_string($conn,$_POST['currentPassword']);
		    $newPassword = mysqli_real_escape_string($conn,$_POST['newPassword']);
		    $confirmNewPassword = mysqli_real_escape_string($conn,$_POST['confirmPassword']);
            
		    $sql = "SELECT * FROM suppliers WHERE username = '$username' and password = '$password'";
		    $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
             $sql = "UPDATE suppliers SET username='$newUsername',password='$newPassword' WHERE username='$username'";
            $conn->query($sql);
            header("location: suppLogin.php");
		    $count = mysqli_num_rows($result);
		}
   	}
?>