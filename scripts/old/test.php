<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <link href="../css/style.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>
<?php
	   include("connect.php");
	   
	  
$query = "SELECT * FROM vehiclelist WHERE 1";
$result = mysqli_query($con,$query);

 
 while($row = mysqli_fetch_array($result)) :
 
$year = $row['Year'];
$make = $row['Manufacturer'];
$model = $row['Model'];
$category = $row['Category'];
$colour = $row['Colour'];
$stockno = $row['Stocknumber'];	
$price = $row['Price'];	


echo "<div class=\"floatleft\">

<br><br><p><strong>$year $make $model $category $colour</strong></p>"; 

echo "<div id=\"".$stockno."\" class=\"imagemap\">";
 	
 
	echo "<a href=\"../images/cars/".$stockno."_1.jpeg\" class=\"highslide\" onclick=\"return hs.expand(this)\">	";
		
		
       echo "<img class=\"propertys img-responsive img-cool1z\" src=\"../images/cars/".$stockno."_1.jpeg\"  alt=\"Thumbnail Image 1\"> </a>";

echo "</div>";

echo "<br><div class=\"floatright\">";
  echo "<table >
 
<td   class=\"but1\" onClick=\"chpic('../images/cars/".$stockno."_1.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"../images/cars/".$stockno."_1.jpeg\" alt=\"\"></td>
  
<td   class=\"but1\" onClick=\"chpic('../images/cars/".$stockno."_2.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"../images/cars/".$stockno."_2.jpeg\" alt=\"\"></td>  
  
 
</tr>

<td   class=\"but1\" onClick=\"chpic('../images/cars/".$stockno."_3.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"../images/cars/".$stockno."_3.jpeg\" alt=\"\"></td>  

<td   class=\"but1\" onClick=\"chpic('../images/cars/".$stockno."_4.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"../images/cars/".$stockno."_4.jpeg\" alt=\"\"></td>  
</table> 
 <br>
</div>
 
 <table class=\"gridtable\">
  <tr>
<th>Stock No</th>
<td>".$row['Stocknumber']."</td>
    </tr>
  <tr>
 <th>Category</th>
 <td>".$row['Category']."</td>
    </tr>
  <tr>
<th>Kilometres</th>
 <td>".$row['Kilometres']."</td>
    </tr>
  <tr>
<th>Colour</th> 
 <td>".$row['Colour']."</td>
    </tr>
  <tr>
<th>VIN</th> 
 <td>".$row['Vin']."</td>
    </tr>
  <tr> 
<th>Fuel</th> 
 <td>".$row['Fuel']."</td>
   </tr>
     <tr> 
   <th>Cylinders</th> 
 <td>".$row['Cylinders']."</td>
   </tr>
  <tr> 
<th>Transmission</th>  
  <td>".$row['Transmission']."</td>
   </tr>
  <tr> 
   <br> 
 </table> ";
 
 
 
 
	
 	endwhile;	
			?>  

</body>
</html>