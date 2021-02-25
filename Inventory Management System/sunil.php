<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
		<div id="top-bar">
		<nav>
			<ul>
                <li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
    
    <div id="side-navagate-bar">
	<!--<div class="main">
		<div class="sideMenu">-->
        <ul>
            <li><h2 id="logo"> Inventory Manangement System</h2></li>
      
            <li><a href="supplier.php">Suppliers </a></li>
              </ul>
    </div>
    <div class="center">
        <h2>Welcome supplier Sunil</h2>
    </div>
<div class="contents">
			<div class="blue-square"  >
				<?php
					$dbServername = "localhost";
					$dbUsername = "root";
					$dbPassword ="";
					$dbName = "inventorysystem";

					$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
					$xyz="SELECT * from supplier";

				$resultx=mysqli_query($conn,$xyz);
				if (mysqli_num_rows($resultx) > 0) 
				{
    // output data of each row
    			echo "<table><tr><th>ID</th><th>S_NAME</th><th>ADDRES</th><th>CONTACT</th></tr>";
    			while($rowx = mysqli_fetch_assoc($resultx)) 
    			{
    				echo"<tr><td>".$rowx['S_Id']."  </td><td>".$rowx['S_Name']."  </td><td> ".$rowx['Address']." </td><td>".$rowx['Contact']." </td></tr>";
        // echo "Quantity: ".$row["Quantity"];
    			}
    				echo"</table>";
    			}
				?>
				</div>
		</div>
	
</body>
</html>