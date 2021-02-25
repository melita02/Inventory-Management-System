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
            <li><a href="suppLogout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
    
    <div id="side-navagate-bar">
        <ul>
            <li><h2 id="logo"> Inventory Manangement System</h2></li>
            <li><a href="updateitem.php">Take order</a></li>
        </ul>
    </div>
    
   
            
    <div class="contents">
        <div class="blue-square">
             <div class="center">
                 <p class="label">Welcome <b><?php echo $_SESSION['username']; ?></b></p><br>
            </div>
            
            <?php 
            $dbServername = "localhost";
            $dbUsername = "root";  
            $dbPassword ="";
            $dbName = "inventorysystem";
            $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
            $xyz="SELECT * from orders where Supplier='".$_SESSION['username']."' ";

            $resultx=mysqli_query($conn,$xyz);
            if (mysqli_num_rows($resultx) > 0) {
                // output data of each row
                echo "<table><tr><th>Orderno</th><th>Item</th><th>Color</th><th>Size</th><th>Quantity</th></tr>";
    			while($rowx = mysqli_fetch_assoc($resultx)) {
                    echo "<tr><td>".$rowx['Order_no']."  </td><td>".$rowx['Item']."  </td><td> ".$rowx['Color']. "</td><td>".$rowx['Size']." </td><td>".$rowx['Quantity']." </td></tr>";

                    //if(isset)
                    // echo "Quantity: ".$row["Quantity"];
    			}

            echo"</table>";
            /*if (isset ($_POST['submit'])){
                 $msg="Order is been taken";
     echo"<script type='text/javascript'>alert('$msg');</script> ";*/

 /*
            }*/

            }
            ?>  
        </div>
    </div>
</body>
</html>
