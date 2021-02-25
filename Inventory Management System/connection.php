<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "inventorysystem";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$i= $_POST['slct1'];
$j= $_POST['slct2'];
$k= $_POST['sizing'];
$a= $_POST['quan'];

 $ql="SELECT Quantity from item WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$result=mysqli_query($conn,$ql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$diff=$row["Quantity"]-$a;
        // echo "Quantity: ".$row["Quantity"];
    }
    }
echo $diff ;

$up="UPDATE item SET Quantity=".$diff."  WHERE I_Name='".$i."' AND Color= '".$j."' AND Size= '".$k."' ";
$res=mysqli_query($conn,$up);

if()
// query to run in phpmyadmin UPDATE `item` SET `Quantity`=100  WHERE `I_Name`='T-Shirt' AND `Color`= 'Orange' AND `Size`= 'S'
?>