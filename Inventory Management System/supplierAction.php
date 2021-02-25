<?php
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
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
        //Query the database for users
$sql = "SELECT * FROM suppliers WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row['username']==$username && $row['password']==$password){
    header("location:pramod.php");
}
else{
    $error = "Your Login Name or Password is invalid";
}     
}
?>