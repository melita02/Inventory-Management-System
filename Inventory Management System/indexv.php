 <html>
<head>
	<title>Inventory</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li><a href="sell.php" >Sell </a></li>
            <li><a href="display.php">Items </a></li>
            <li><a href="orders.php">Orders </a></li>
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

		<form action="display.php">

	<input type="image" src="item.jpg" alt="Submit" class="gallery1">
			
		</form>
	
<form action="sell.php">

	<input type="image" src="sell.jpg" alt="Submit" class="gallery2">
			
		</form>
		<form action="orders.php">

	<input type="image" src="buy.jpg" alt="Submit" class="gallery3">
			
		</form>
		<form action="supplier.php">

	<input type="image" src="supplier.jpg" alt="Submit" class="gallery4">
			
		</form>

	
	</div>  

</body>
</html>