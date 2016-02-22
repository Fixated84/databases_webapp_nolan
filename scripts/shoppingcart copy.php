 <?php
  

   
 include('connect.php');
 
   session_start();
if (!isset($_SESSION['username'])) {
 header('location:login.php');
}

   


 
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon.ico">

   
 
    <title>West Coast Auto</title>
    <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  
  
  <script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
var btns = document.querySelectorAll('.case')   ,

       
	     emailaddr = document.querySelector('.emailaddr')  ; 
  

// looping through the nodelist and attaching eventlisteners
[].forEach.call(btns, function(btn) {
    btn.addEventListener('click', function(event) {
        // fetching the phone number
    //    var selectedPhone = email.value;
	       var selectedPhone = event.target.parentNode.previousSibling.previousSibling.textContent;
	 
    //var test = document.getElementById('firstname').value
	
	// var test = event.target.parentNode.previousSibling.textContent;
  
       emailaddr.value = selectedPhone    ; //setting the value
	  
	 // update.value =  test;
	  
	//    alert(selectedPhone);
	   
	 	 
		 
    }, false);
	
}); 
}//]]>  
 
</script>
 
  <!-- <script>
window.onorientationchange = function() { location.reload() };
</script>-->

<script>
function showSalesperson(str) {
    if (str == "") {
        document.getElementById("txtHintSalesperson").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHintSalesperson").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getsalesperson.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<script>
function showCustomer(str) {
    if (str == "") {
        document.getElementById("txtHintCustomers").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHintCustomers").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getcustomers.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<script>
function showVehicle(str) {
    if (str == "") {
        document.getElementById("txtHintVehicle").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHintVehicle").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getvehicle.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  
  
  
  <body>
  
   <!--Testing Fix Nav with navbar-fixed-top-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <!--Testing Fix Nav with navbar-fixed-top-->
     
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
         
              <div class="navbar-header1">
        <button   type="button" class="navbar-toggle collapsed menu-toggle pull-left" data-toggle="collapse" ><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
 
         <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="inverseNavbar1">
        <ul class="nav navbar-nav">
       <!--   <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>-->
           <li ><a href="../index.html">Home</a></li>
           <li class="active"><a href="employee.php">Employee Login</a></li>
          <!-- <li><a href="pages/design.html">Design</a></li>-->
  
           <li><a href="../pages/ourprocess.html">Privacy Policy</a></li>
                             
        </ul>
     
        
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

<div class="navbarside navbar-inverse">

<nav >
<ul class="nav navbar-nav">
 <br><br>

           <li class="active" ><a href="../index.html">Home</a></li>
           <li><a href="../pages/about.html">About</a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Design<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../pages/design.html">Display Homes</a></li>
            <li class="divider"></li>
            <li><a href="../pages/appliances.html">Appliances</a></li>                       
            <li><a href="../pages/indoor.html">Indoors</a></li>
            <li><a href="../pages/outdoor.html">Outdoors</a></li>
          </ul>
        </li>
          <li><a href="../pages/ourprocess.html">Our Process</a></li>
           <li><a href="../pages/faq.html">FAQ</a></li>  
           <li><a href="../pages/testimonials.html">Testimonials</a></li>  
                <li><a href="clients.php">Clients</a></li>  
           <li><a href="../pages/contact.html">Contact</a></li>   
              </ul>  
</nav>

</div>

  <div class="container">
    <div class="row">
     
   <div class="col-md-12 col-sm-8 col-sm-offset-0">
 
 <!--Testing Fix Nav with 3 br-->
  <br>
  
<br>
<br>
 <!--Testing Fix Nav with 3 br-->
 
  <img src="../images/logo.png" class="img-responsive center-block" alt="Placeholder image"> <br>
   <!--<hr>-->
  <!--End Col-->
  
  </div>
  
    <div class="col-md-12 col-sm-8 col-sm-offset-0 col-lg-offset-1 col-lg-10">
 
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
  
            
            </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav hello">
            
              <li ><a href="#">Home<span class="sr-only">(current)</span></a></li>
 
 
  
 
 
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">History</a></li>
                  <li><a href="#">Our Values</a></li>
                  
                </ul>
              </li>
       <li ><a href="#">Specials</a></li> 
       <li ><a href="#">Used Vehicles</a></li>             
               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Finance<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Insurance</a></li>
                  
                </ul>
              </li>            
     <li ><a href="#">Testimonals</a></li>         
        <li ><a href="#">Contact</a></li>         
             
            </ul>
    
 
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

      <!--Testing Fix Nav with 3 br-->
 
   <!--<hr>-->
  <!--End Col-->
  
  </div>
    </div>
    <div class="row">
        
      <div class="col-sm-7 col-sm-offset-1 col-lg-offset-1 col-lg-10">
         <hr>
       <h3 >West Coast Auto Shopping Cart</h3>  <br>
       
      <SCRIPT type="text/javascript">
function goToPage(url)
{
var initial = "http://localhost/php/removesalesperson";
var extension = ".php?email=";

document.something.action=initial+extension+url;
}
</SCRIPT>



      <div class="row">
      
        <div class="col-lg-offset-0 col-lg-12">  
<form>
Salesperson:<br>

 <br>



<!-- <select name="users"  onChange="showSalesperson(this.value)">
  <option value="">Select a salesperson:</option> -->
  <?php 
  
  if (!isset($_SESSION['activeusername'])) {
  
}else{
	 
$activeusername = $_SESSION['activeusername'];
//echo 	$activeusername;
	

  
 $query = "SELECT * FROM Salespersons WHERE Username = '$activeusername' ";
$result = mysqli_query($con,$query);

 
 //while ($row = mysqli_fetch_array($result)) {
 //echo "<option value=\"".$row['idSalespersons']."\">".$row['Fullname']."</option>";
 
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
 
 
 
} 
?>

  </select 
></form>
<br>
<br>
<div id="txtHintSalesperson"><b> </b></div>
	  
    
      
      </div>
          <div class="col-lg-offset-0 col-lg-12"> 
          
           
<form>
Customers:<br>
<br>
<select name="users" onchange="showCustomer(this.value)">
<option value="">Select a customer:</option>
<?php 


$query = "SELECT * FROM Customers WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)){
echo "<option value=\"".$row['idCustomers']."\">".$row['Fullname']."</option>";
}
?> 


  </select>
</form>
<br>
<br>
<div id="txtHintCustomers"><strong>Customer info will be listed here...</strong></div>    
          
          
          
<!--     <form method="post" action-"#">
     <br>
   <input type="text" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>" />
    <br><br>
       <input type="submit" value="Search" name="submit" class="btn btn-sm btn-default center-block">
<br>
     </form>	
     
     
   <table  class="gridtable">
  <tr>
  <th>Customer</th>
   <tr> -->  
   <?php
	/* if(isset($_POST['search'])) {
	 		  
   $fullname = $_POST['search'];
   
$query = mysql_query("SELECT * FROM customers WHERE `name` LIKE '%$fullname%' ");
 while($row = mysql_fetch_array($query)):

  
echo "<tr id=\"tr1\">";
echo "<td>".$row['name']."</td>";
  endwhile;	 
			 
			 
	 }	*/  
 	 ?>
 
 </tr>
 </tr>
 </table>
 </div> 
          
      <!--  <div class="col-lg-offset-0 col-lg-3"> 
          
         
          
          
            </div> -->
        </div>
      <div class="row">
        <div class="col-lg-12 center-block"> 
        <br><br>
   <form>
   Vehicles:<br>
<select name="users" onchange="showVehicle(this.value)">
<option value="">Select a vehicle:</option>
<?php 
 


$query = "SELECT * FROM Vehiclelist WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)){
echo "<option value=\"".$row['Stocknumber']."\">".$row['Year']. ' ' .$row['Manufacturer'].' '.$row['Model']."</option>";
}
?> 

 <!-- <option value="">Select a customer:</option>
  <option value="1">Peter Griffin</option>
  <option value="2">Lois Griffin</option>
  <option value="3">Joseph Swanson</option>
  <option value="4">Glenn Quagmire</option>-->
  </select>
</form>
<br>
<div id="txtHintVehicle" class="center-block"><strong>Vehicle info will be listed here...</strong></div>      
        
       <!-- <br><br>
        <table  class="gridtable">
  <tr>
<th>Stock No</th>
 <th>Manufacturer</th>
<th>Model</th>
 <th>Category</th>
<th>Year</th>
<th>Price</th>
<th>Kilometres</th>
<th>Colour</th>
<th>Registration</th> 
<th>VIN</th> 
<th>Cylinders</th> 
<th>Fuel</th> 
<th>Transmission</th>  
   <tr>
-->
 <?php
//include('database.php');

  
//$query = mysql_query("SELECT * FROM `vehiclelist`");

 //while($row = mysql_fetch_array($query)):

  
 
/*echo "<tr id=\"tr1\">";
echo "<td>".$row['stocknumber']."</td>";
echo "<td>".$row['manufacturer']."</td>";
echo "<td>".$row['model']."</td>";
echo "<td>".$row['category']."</td>";
echo "<td>".$row['year']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td>".$row['kilometres']."</td>";
echo "<td>".$row['colour']."</td>";
echo "<td>".$row['registration']."</td>";
echo "<td>".$row['vin']."</td>";
echo "<td>".$row['cylinders']."</td>";
echo "<td>".$row['fuel']."</td>";
echo "<td>".$row['transmission']."</td>";
  endwhile;
*/

	 ?>
  <!--</table><br>  -->
        </div>
    
      </div>
      

 
<!--    <div class="col-sm-3 col-md-9 col-md-offset-2 col-lg-offset-4 col-lg-3">  
     <button type="button" class="btn btn-sm btn-default" onClick="window.location.href='password_protect_admin.php?logout=1'" value="Log Out">Logout</button>  
        
  <!-- <input type="submit" value=" Enter " name="submit" class="btn btn-sm btn-default center-block"> 
   
   <form  class="hideupdate"    method="post">
 
  </form> 
<br>
</div> -->


<br>   
      
          
</div>
</div>
</div>
    
      <hr>
        <div class="row center-block">
    <div class="text-center col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0 hello">
      
      <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="index.html" >Home</a> | <a href="pages/privacy.html" >Privacy Policy</a>  </p>
    </div>
      
  </div>
    <hr>
    <!--End Row-->   

<!--End Wrapper-->
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
    
       
    
    
	<script src="../js/bootstrap.js"></script>
    
    
   <script type="text/javascript">
	  
	   
	  
     $('.updateinfo').click(function(event) {
		 
	$('.hideupdate').toggle();
 
		 
	// var menu = "hide"; 
  
	// if (menu == "hide") {
	// $('.hideupdate').css('display', 'block');
	 
	// menu = "hide";
	 
	// }else {
		 
	//	  $('.hideupdate').css('display', 'none');
		  
		//   menu = "show";
	  
	  
	  
	 //  }
 
	   
	  firstname = document.querySelector('.updatefirstname'),
	  lastname = document.querySelector('.updatelastname') ,
	  email = document.querySelector('.updateemail') ,
      phonenumber = document.querySelector('.updatephone') ,
	  property = document.querySelector('.updateproperty') ;
	  username = document.querySelector('.updateusername') ;
	  
	  updatehelp = document.querySelector('.updatehelp') ;  
	//  passwd = document.querySelector('.updatepassword') ; 
		 // phone = document.querySelector('$testr') 
		       
			    var select1 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			  //  var select2 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
				
		       var select3 = event.target.parentNode.previousSibling.previousSibling.previousSibling.textContent;
			   
			   var select4 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			   
			//   var select5 = event.target.parentNode.previousSibling.previousSibling.previousSibling.textContent; 

			     var select6 = event.target.parentNode.previousSibling.previousSibling.textContent; 
				 
				  var select7 = event.target.parentNode.previousSibling.previousSibling.textContent;
				 updatehelp
				 
				//   var select7 = event.target.parentNode.previousSibling.previousSibling.textContent; 
			  
		firstname.value =  select1 ;
phonenumber.value = select4;
		email.value =  select3 ;
 	
 
		username.value = select6;
     	 updatehelp.value = select7;
		 //  alert(select7);
			  
    
		 
 
      
    });
   </script>      
    
    
    <script type="text/javascript">
$(document).ready(function() {
	
	var menu = "close";
	
   $('.menu-toggle').click(function()  {
	   
	   if (menu == "close") {
		   	   
	   $('.navbarside').css('-webkit-transform', 'translate(0,0)');
	   $('.navbarside').css('-moz-transform', 'translate(0,0)'); 
	   $('.navbarside').css('-o-transform', 'translate(0,0)'); 
	   $('.navbarside').css('transform', 'translate(0,0)'); 
 
	   $('.container').css('-webkit-transform', 'translate(30%,0)');
	   $('.container').css('-moz-transform', 'translate(30%,0)');
	   $('.container').css('-o-transform', 'translate(30%,0)');	   
	   $('.container').css('transform', 'translate(30%,0)');
		
	   $('.navbar-header1').css('-webkit-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('-o-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('transform', 'translate(0,0)');	   
	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(30%,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(30%,0)');   
	   $('.navbar-header1').css('-o-transform', 'translate(30%,0)');
	   $('.navbar-header1').css('transform', 'translate(30%,0)');   
	   
	   menu = "open";
	   
	   }else {
		   
	   $('.navbarside').css('-webkit-transform', 'translate(-100%,0)');
	   $('.navbarside').css('-moz-transform', 'translate(-100%,0)');	   
	   $('.navbarside').css('-o-transform', 'translate(-100%,0)');	   
	   $('.navbarside').css('transform', 'translate(-100%,0)');	   
	   
	   $('.container').css('-webkit-transform', 'translate(0,0)');
	   $('.container').css('-moz-transform', 'translate(0,0)');	   
	   $('.container').css('-o-transform', 'translate(0,0)');
	   $('.container').css('transform', 'translate(0,0)');	   
	   	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(-100%,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(-100%,0)');	   
	   $('.navbar-header1').css('-o-transform', 'translate(-100%,0)');	   
	   $('.navbar-header1').css('transform', 'translate(-100%,0)');	   
	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-o-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('transform', 'translate(0,0)');
	   
	  
	   
	  menu = "close";
	  
	  
	  
	   }
	});   
});
</script>
 <!--    <script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
  
 document.getElementsByClassName("rickroll").item("iframe").src = "http://www.youtube.com/embed/dQw4w9WgXcQ?html5=1&autoplay=1";

  
})
</script> -->

<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
      
        $('#myModal').modal('show');
       
   document.getElementsByClassName("rickroll").item("iframe").src = "https://www.youtube.com/embed/dQw4w9WgXcQ?html5=1&autoplay=1";
    });

    $('#myModal').click(function () {
      document.getElementsByClassName("rickroll").item("iframe").src = "1";
 
  
    });
</script>
 


  </body>
</html>