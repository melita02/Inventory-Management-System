<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="index.css">
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
            <li><a href="item.php">Inventory </a></li>
            <li><a href="additem.php">Add Item </a></li>
            
            <li><a href="deleteitem.php">Delete Item </a></li>

        </ul>
    </div>
	 <div class="contents">
			<div class="blue-square">
				<form class="form-style-9"  method="post">
					<ul>	
						<li>	

							<label class=" field-split align-left">Item:</label>
							<input type="text" id="slct2" name="slct2" class="field-style" >
								
    						</input>
						</li>	
						<li>	
							<label class=" field-split align-left">Color:</label>
							<input type="text" name ="sizing" class="field-style">
								
							</input>
						</li>
		
						<br>
						<li>
							<label class=" field-split align-left">Quantity: </label>
							<input name="quan" class="field-style" type="number">
							
						</li>	
						<br>
							<li>
							<label class=" field-split align-left">Size: </label>
							<input name="vi" class="field-style" type="text" >
							
						</li>
						<br>	
					</ul>	
					<div class="wrapper"  ><button name="submit">Submit</button></div>
	
</form>
</div>
			</div>


		</div>

	</div>

<?php
 
	
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "inventorysystem";

$conn = mysqli_connect($dbServername ,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['submit'])){
$j= $_POST['slct2'];
$k= $_POST['sizing'];
$a= $_POST['quan'];
$i= $_POST['vi'];
 
$check_1="Select I_Name,Color,Size from item where I_Name='".$j."' and Color='".$k."' and Size='".$i."' ";
$result=mysqli_query($conn,$check_1);
if(mysqli_num_rows($result)>0)
{
	echo " ITEM ALREADY PRESENT";
	$alreadypresent= "ITEM ".$j." with COLOR ".$k." and SIZE ".$i." ALREADY PRESENT";
     echo"<script type='text/javascript'>alert('$alreadypresent');</script> ";
}
else
{
	$query="INSERT INTO item(I_Name,Color,Quantity,Size) VALUES ('".$j."','".$k."',".$a.",'".$i."')";

	mysqli_query($conn,$query);
	$iteminsert= "ITEM ".$j." with COLOR ".$k." and SIZE ".$i." ADDEDD TO YOUR INVENTORY";
     echo"<script type='text/javascript'>alert('$iteminsert');</script> ";

	
}

}
?>

 

</body>
</html>