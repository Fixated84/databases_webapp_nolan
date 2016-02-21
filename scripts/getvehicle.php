<!DOCTYPE html>
<html>
<head>
<!--<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 2px; 
}

th {text-align: left;}
</style>-->
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','wca');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"Vehiclelist");
$sql="SELECT * FROM Vehiclelist WHERE Stocknumber = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class=\"gridtable\">
<tr>
<th>Stock No</th>
 <th>Manufacturer</th>
<th>Model</th>
 
<th>Year</th>
<th>Price</th>
<th>Kilometres</th>
<th>Colour</th>
 
<th>VIN</th> 
 
 
<th>Transmission</th>  
 
</tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$row['Stocknumber']."</td>";
echo "<td>".$row['Manufacturer']."</td>";
echo "<td>".$row['Model']."</td>";
//echo "<td>".$row['category']."</td>";
echo "<td>".$row['Year']."</td>";
echo "<td>".$row['Price']."</td>";
echo "<td>".$row['Kilometres']."</td>";
echo "<td>".$row['Colour']."</td>";
//echo "<td>".$row['registration']."</td>";
echo "<td>".$row['Vin']."</td>";
//echo "<td>".$row['cylinders']."</td>";
//echo "<td>".$row['fuel']."</td>";
echo "<td>".$row['Transmission']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>