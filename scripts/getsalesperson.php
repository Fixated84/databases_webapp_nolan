<!DOCTYPE html>
<html>
<head>
 <style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 2px; 
}

th {text-align: left;}
</style> 
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','wca');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"Salespersons");
$sql="SELECT * FROM Salespersons WHERE idSalespersons = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table class=\"gridtable\">
<tr>
<th>Name</th>
<th>Salesperson ID</th> 
<th>Phone</th> 
<th>Email</th>  
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Fullname'] . "</td>";
    echo "<td>" . $row['idSalespersons'] . "</td>"; 
    echo "<td>" . $row['Phone'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>