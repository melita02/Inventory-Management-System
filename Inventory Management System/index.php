 <html>
<head>
	<title>Inventory</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<style>
	


	.gallery1{
		width:250px;
		height:250px;
		background-color: white;
		position: fixed;
		top:100px;
		left:300px;
	}

	.gallery2 {
		width:250px;
		height:250px;
		background-color: white;
		position: fixed;
		top:100px;
		left:650px;
	}

	.gallery3 {
		width:250px;
		height:250px;
		background-color: white;
		position: fixed;
		top:100px;
		left:1000px;
	}

	.gallery4 {
		width:250px;
		height:250px;
		background-color: white;
		position: fixed;
		top:400px;
		left:300px;
	}

	.gallery5 {
		width:250px;
		height:250px;
		background-color: white;
		position: fixed;
		top:400px;
		left:650px;
	}

	.gallery6 {
		width:250px;
		height:250px;
		background-color: white;
		position: fixed;
		top:400px;
		left:1000px;
	}

	
</style>
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
            <li><a href="sell.php" >Items Out </a></li>
            
            <li><a href="orders.php">Orders Placed </a></li>
            <li><a href="supplier.php">Suppliers </a></li>
        </ul>
    </div>
    
		<div class="contents">
			<!-- <img  src="wallpaper1.jpg"> -->
			<div class="blue-square"></div>  
		</div>
		<!-- <script >
			$(document).ready(function(){
				$('.per').click(function(){
					$('.blue-square').load('sell.html')
				});
			});
		</script>
    
    <h2>Available in our store only!.<br>Hurry up! offer valid till stocks last!</h2>-->

	
		<!-- <script >
			$(document).ready(function(){
				$('.per').click(function(){
					$('.blue-square').load('sell.html')
				});
			});
		</script> -->

		<form action="aboutme.php">

	<input type="image" src="users.jpg" alt="Submit" class="gallery1">
			
		</form>

<form action="item.php">

	<input type="image" src="items.jpg" alt="Submit" class="gallery2">
			
		</form>

<form action="sell.php">

	<input type="image" src="sell.jpg" alt="Submit" class="gallery3">
			
		</form>

					
		<form action="itemsin.php">

	<input type="image" src="buy.jpg" alt="Submit" class="gallery4">
			
		</form>



		<form action="orders.php">

	<input type="image" src="order.jpg" alt="Submit" class="gallery5">
			
		</form>
		<form action="supplier.php">

	<input type="image" src="supplier.jpg" alt="Submit" class="gallery6">
			
		</form>

	
	</div>  

	

</body>
</html>