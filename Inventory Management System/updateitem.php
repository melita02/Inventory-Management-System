<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="index.css">

<!-- 	<script>
	function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Kurta"){
		var optionArray = ["Black|Black","White|White",];
	}
	if(s1.value == "Jeans"){
		var optionArray = ["Gray|Gray","Blue|Blue",];
	}
	if(s1.value == "T-shirt"){
		var optionArray = ["Orange|Orange","Yellow|Yellow",];
	}
	if(s1.value == "Shirt"){
		var optionArray = ["Green|Green","Black|Black",];
	}  
	
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
 -->
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
            
            <li><a href="suppmain.php">Home</a></li>
            
            
        </ul>
    </div>
		<div class="contents">
			<div class="blue-square">
				<form class="form-style-9"  method="post">
					<ul>	
						<li>	
							<label  name="field1" class=" field-split align-left">Item :</label>
							<input type="text"id="slct1" name="slct1"  class="field-style">
							</input>
						</li>

						<!-- <li>	
							<label class=" field-split align-left">Brand:</label>
							<select id="slct2" name="slct2" class="field-style field-split align-left">
								<option value="">Select</option>
							</select>
						</li>	 -->

		<!-- <label>Brand:</label>
		<select>
			<option value="Levis">Levis</option>
    		<option value="Wrangler">Wrangler</option>
    		<option value="Biba">Biba</option>
    		<option value="IndusDiva">IndusDiva</option>
    		<option value="Raindrops">Raindrops</option>
    		<option value="Lee copper">Lee copper</option>
    		<option value="Allen Solly">Allen Solly</option>
    		<option value="H&M">H&M</option>
		</select> -->
						<li>	
							<label class=" field-split align-left">Color:</label>
							<input type="text" id="slct2" name="slct2" class="field-style">
								
    						</input>
						</li>	
						<li>	
							<label class=" field-split align-left">Size:</label>
							<input name ="sizing" class="field-style">
								
							</input>
						</li>
		
						<br>
						<li>
							<label class=" field-split align-left">Quantity: </label>
							<input name="quan" class="field-style" type="number" min="1" max="100"name="quantity">
							
						</li>	
						<br>
						<!-- <li>
							<label class=" field-split align-left">Location:</label>
							<select class="field-style field-split align-left">
								<option value="Dadar">Dadar</option>
    							<option value="Andheri">Andheri</option>
    							<option value="Borivali">Borivali</option>
    							<option value="Virar">Virar</option>
							</select>
							
						</li> -->
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
$i= $_POST['slct1'];
$j= $_POST['slct2'];
$k= $_POST['sizing'];
$a= $_POST['quan'];

 $ql="SELECT Quantity from item WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$result=mysqli_query($conn,$ql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$save=$row["Quantity"];
    	$diff=$save+$a;
    	
        // echo "Quantity: ".$row["Quantity"];
    }
}

$supp="SELECT S_Name FROM supplier ORDER BY RAND() LIMIT 1";
$random=mysqli_query($conn,$supp);
if (mysqli_num_rows($random) > 0) {
while($sel = mysqli_fetch_assoc($random)) {
    	$sa=$sel["S_Name"];
    }
  	
}

if($diff<101){
	$tr1="SELECT * from orders";
$tr2=mysqli_query($conn,$tr1);


$up="UPDATE item SET Quantity=".$diff."  WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$res=mysqli_query($conn,$up);

$del="Delete from orders where Item='".$i."' AND Color= '".$j."' AND Size= '".$k."' AND supplier='".$_SESSION['username']."'";

$resp=mysqli_query($conn,$del);



 


}
}

?>
 
</body>
</html>