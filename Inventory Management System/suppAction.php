<?php
session_start();
//connect to the server and select the database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "supplier";
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$error = ""; 
    

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $username = mysqli_real_escape_string($conn,$_POST['username']);
    $_SESSION['username']=$username;
    
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
        //Query the database for users
$sql = "SELECT * FROM suppliers WHERE username='$username' AND password='$password' ";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row 
$row = mysqli_fetch_array($result);

// If result matched $username and $password, table row must be 1 row 
if($row['username']==$username && $row['password']==$password) {
    header('location: suppmain.php');
}
    
/*if($row == 1){ 
    /* $_SESSION['username'] = $username; 
    header('location: suppmain.php');
    
    if ($username == 'pramod') {
        header("Location: pramod.php");
    } 
    elseif ($username == 'anand') {
        header("Location: anand.php");
    }
    elseif ($username == 'sunil') {
        header("Location: sunil.php");
    }
    elseif ($username == 'arun') {
        header("Location: arun.php");
    }
    
} */
    
else {
    $error = "Your Login Name or Password is invalid";
}
}

?>