<?php
    //connect to the server and select the database
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "login";
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
            
		    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
		    $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
             $sql = "UPDATE users SET username='$newUsername',password='$newPassword' WHERE username='$username'";
                $conn->query($sql);
            header("location: login.php");
		    $count = mysqli_num_rows($result);
		      
		    // If result matched $myusername and $mypassword, table row must be 1 row
				
		    /*if($count != 1) {
		   		$error = "Your Login Name or Password is invalid.</br>";
		    }else if($confirmNewPassword != $newPassword){
		      	$error = "Your new password and  confirm new password does not match.</br>";
		    }else {
                $sql = "UPDATE users SET username='$newUsername',password='$newPassword' WHERE username='$username'";
                $conn->query($sql); 
                
				if($uploadOk == 1){
					header("location:login.php");
				}
		    }*/
		}
   	}
?>