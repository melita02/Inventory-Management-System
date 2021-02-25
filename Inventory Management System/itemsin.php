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
				<?php
					$dbServername = "localhost";
					$dbUsername = "root";
					$dbPassword ="";
					$dbName = "inventorysystem";

