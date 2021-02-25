<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>
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
            <li><a href="item.php">Items </a></li>
            <li><a href="orders.php">Orders </a></li>
            <li><a href="supplier.php">Suppliers </a></li>

        </ul>
    </div>
		<div class="contents">
			<div class="blue-square">
				<?php
					$dbServername = "localhost";
					$dbUsername = "root";
					$dbPassword ="";
					$dbName = "inventorysystem";

					$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
					$abc = "SELECT * from orders";
					
				$resulta = mysqli_query($conn,$abc);
				$x= mysqli_num_rows($resulta) ;
				/*echo"<script type='text/javascript'>alert(Item is restocked);</script>";
				if(isset($z)){
					if($x<$z){
					echo"<script type='text/javascript'>alert('Item has been restocked');</script>";
					}*/
				
				if (mysqli_num_rows($resulta) > 0) {
    // output data of each row
    			echo "<table><tr><th>ORDER NO</th><th>ITEM</th><th>Color</th><th>Size</th><th>SUPPLIER</th><th>QUANTITY</th></tr>";
    			while($rowa = mysqli_fetch_assoc($resulta)){
    				echo"<tr><td>".$rowa['Order_no']."  </td><td>".$rowa['Item']."  </td><td> ".$rowa['Color']." </td><td> ".$rowa['Size']." </td><td> ".$rowa['Supplier']." </td><td>".$rowa['Quantity']." </td></tr>";
        // echo "Quantity: ".$row["Quantity"];
    			}
                    echo"</table>";
    			}
				?>
				</div>
			</div>
    </body>
</html>