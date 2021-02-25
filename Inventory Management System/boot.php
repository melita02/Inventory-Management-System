<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inventory</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	 <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div id="top-bar">
		<nav>
			<ul>
                <li><a href="index.php">Home</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
    
    <div id="side-navagate-bar">
        <ul>
            <li><h2 id="logo"> Inventory Manangement System</h2></li>
            <li><a href="item.php">Inventory </a></li>
            <li><a href="orders.php">Orders </a></li>
            <li><a href="supplier.php">Suppliers </a></li>
            
        </ul>
    </div>
         
    <div class="contents">
         <div class="blue-square">
            <div class="container">
 <table class="table table-condensed">
    
         <?php
         $dbServername = "localhost";
         $dbUsername = "root";
         $dbPassword ="";
         $dbName = "inventorysystem";
         
         $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
         $qla="SELECT * from item";
         
         $result=mysqli_query($conn,$qla);
         if (mysqli_num_rows($result) > 0) {
             // output data of each row
             
             echo "<table><tr><th>ID</th><th>ITEM</th><th>COLOR</th><th>QUANTITY</th><th>SIZE</th></tr>";
             
             while($row = mysqli_fetch_assoc($result)){
                 echo"<tr><td>".$row['I_id']."  </td><td>".$row['I_Name']."  </td><td> ".$row['Color']." </td><td>".$row['Quantity']." </td><td> ".$row['Size']." </td></tr>";
                 // echo "Quantity: ".$row["Quantity"];
             }
             echo"</table>";
         }
         ?>
         </div>
    </div>	

<div class="container">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
  <table class="table table-condensed">
</body>
</html>