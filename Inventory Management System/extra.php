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
				<li><a href="display.php">Items </a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
    
    <div id="side-navagate-bar">
        <ul>
            <li><h2 id="logo"> Inventory Manangement System</h2></li>
            <li><a href="sell.php" >Sell </a></li>
            <li><a href="orders.php">Orders </a></li>
            <li><a href="supplier.php">Suppliers </a></li>
            <li><a href="additem.php">Add Item </a></li>
            <li><a href="updateitem.php">Update Item </a></li>
        </ul>
    </div>
         
   <div class="contents">
			<div class="blue-square">
				<form class="form-style-9"  method="post">
					<ul>	
						<li>	

				<h3 class="modal-title">Add Item</h3>
			<div class="modal-body">
				<!-- main form -->
					<form class="form-horizontal" role="form" id="add-item-form">
				  <div class="form-group" id="sr">
					    <label class="control-label col-sm-3" for="serialNumber">Item Id.:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="iid" placeholder="Enter Item Id">
					    </div>
					  </div>
				  <div class="form-group">

					    <label class="control-label col-sm-3" for="itemname">Item Name:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="in" placeholder="Enter Item Name" autofocus>
					    </div>
					  </div>

					   				
					  <div class="form-group" id="b">
					    <label class="control-label col-sm-3" for="brand">Color:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="col" placeholder="Enter Color">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="amount">Quantity:</label>
					    <div class="col-sm-9"> 
					      <input type="number" step="any"  class="quan" id="amount" placeholder="Enter Quantity">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="amount">Size:</label>
					    <div class="col-sm-9"> 
					      <input type="text" step="any"  class="form-control" id="si" placeholder="Enter Size">
					    </div>
					  </div>		


					  <br>
					 <!-- old cat pos -->
				  <div class="form-group"> 
					    <div class="wrapper"  >
					    	<button name="submit">Submit</button></div>
					       </button>
					    </div>
					  </div>
					</br>
					</form>
				<!-- /main form -->
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
$i= $_POST['iid'];
$j= $_POST['in'];
$k= $_POST['col'];
$a= $_POST['quan'];
$s= $_POST['si'];

 $ql="SELECT Quantity from item WHERE 'I_id= ".$i."' AND I_Name='".$j."' AND Color= '".$k."' AND Size= '".$si."' ";
$result=mysqli_query($conn,$ql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$save=$row["Quantity"];
    	$diff=$save+$a;
    	        // echo "Quantity: ".$row["Quantity"];
    }
}

if($diff<100){
$up="UPDATE item SET Quantity=".$diff."  WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$res=mysqli_query($conn,$up);

 $tr1="SELECT Quantity from item WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$tr2=mysqli_query($conn,$tr1);
if (mysqli_num_rows($tr2) > 0) {
    
    while($row1 = mysqli_fetch_assoc($tr2)){
    	$c = $row1["Quantity"] ;
    	 }
   }
}
}
 ?>

 </body>
</html>












addddddddddddddddddddddddddddd
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
				<li><a href="display.php">Items </a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
    
    <div id="side-navagate-bar">
        <ul>
            <li><h2 id="logo"> Inventory Manangement System</h2></li>
            <li><a href="sell.php" >Sell </a></li>
            <li><a href="orders.php">Orders </a></li>
            <li><a href="supplier.php">Suppliers </a></li>
            <li><a href="additem.php">Add Item </a></li>
            <li><a href="updateitem.php">Update Item </a></li>
        </ul>
    </div>
         
   <div class="contents">
			<div class="blue-square">
				<form class="form-style-9"  method="post">
					<ul>	
						<li>	

				<h3 class="modal-title">Add Item</h3>
			<div class="modal-body">
				<!-- main form -->
					<form class="form-horizontal" role="form" id="add-item-form">
				  <div class="form-group" id="sr">
					    <label class="control-label col-sm-3" for="serialNumber">Item Id.:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="iid" placeholder="Enter Item Id">
					    </div>
					  </div>
				  <div class="form-group">

					    <label class="control-label col-sm-3" for="itemname">Item Name:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="in" placeholder="Enter Item Name" autofocus>
					    </div>
					  </div>

					   				
					  <div class="form-group" id="b">
					    <label class="control-label col-sm-3" for="brand">Color:</label>
					    <div class="col-sm-9"> 
					      <input type="text" class="form-control" id="col" placeholder="Enter Color">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="amount">Quantity:</label>
					    <div class="col-sm-9"> 
					      <input type="number" step="any"  class="quan" id="amount" placeholder="Enter Quantity">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="amount">Size:</label>
					    <div class="col-sm-9"> 
					      <input type="text" step="any"  class="form-control" id="si" placeholder="Enter Size">
					    </div>
					  </div>		


					  <br>
					 <!-- old cat pos -->
				  <div class="form-group"> 
					    <div class="col-sm-offset-2">
					      <button type="submit" name="submit" value="add" class="btn btn-primary">Save
					       </button>
					    </div>
					  </div>
					</br>
					</form>
				<!-- /main form -->
			</div>
		</div>
	</div>
</div>

<?php
					$dbServername = "localhost";
					$dbUsername = "root";
					$dbPassword ="";
					$dbName = "inventorysystem";

					$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
					if(isset($_POST['submit'])){
					$x= $_POST['iid'];
					$y= $_POST['in'];
					$z= $_POST['col'];
					$q= $_POST['quan'];
					$s= $_POST['si'];


		$insert="INSERT INTO item (I_id, I_Name,Color,Quantity, Size) VALUES ('".$iid."','".$in."',".$col.",".$quan.",".$si.")";
     	$insertion=mysqli_query($conn,$insert);
     }
?>