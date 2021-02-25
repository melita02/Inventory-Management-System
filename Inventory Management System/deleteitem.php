
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
                <li><a href="index.php">Home</a></li>
				
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
    
    <div id="side-navagate-bar">
	<!--<div class="main">
		<div class="sideMenu">-->
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
							<input type="text" id="slct2" name="slct2" class="field-style">
								
    						</input>
						</li>	
						<li>	
							<label class=" field-split align-left">Color:</label>
							<input type="text" name ="sizing" class="field-style">
								
							</input>
						</li>
		
						<br>
						
						<br>
							<li>
							<label class=" field-split align-left">Size: </label>
							<input name="vi" class="field-style" type="text" name="quantity">
							
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
$i= $_POST['slct2'];
$j= $_POST['sizing'];
$k= $_POST['vi'];


 $ql="delete from item WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$result=mysqli_query($conn,$ql);
$deleteitem= "ITEM ".$i." with COLOR ".$j." and SIZE ".$k." DELETED";
     echo"<script type='text/javascript'>alert('$deleteitem');</script> ";
}
?>
 
</body>
</html>