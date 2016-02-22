<?php
 include("connect.php");	 
 session_start();
if (!isset($_SESSION['username'])) {
 header('location:login.php');
}
 
$message = "<br><p></p><br>";
 $salepersonidErr = $customeridErr = $vehicleidErr = $error = "<p></p>";
 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
 
  
  
 $error = false; 	 
if (empty($_POST["salespersonid"])) {
	$salespersonid = "";
	
$salepersonidErr = "<p class=\"animated bounce red\">Salesperon is Required.</p>";
 
$error = true;
 
}else{ 
 
$salespersonid = test_input($_POST["salespersonid"]);
if (!preg_match("/^[0-9]*$/",$salespersonid)) {
      $salepersonidErr = "<p class=\"animated bounce red\">Salesperon requires numbers only</p>"; 
      $error = true;
	  
	 echo $salespersonid ;
 	
}
}
if (empty($_POST["customerid"])) {
	$customerid = "";
$customeridErr = "<p class=\"animated bounce red\">Customer is Required</p>";
$error = true;
 
} else {


$customerid = test_input($_POST["customerid"]);	
if (!preg_match("/^[a-zA-Z0-9 ]*$/",$customerid)) {
      $customeridErr = "<p class=\"animated bounce red\">>Customer requires numbers only</p>"; 
      $error = true;
	 
 
}
} 
if (empty($_POST["vehicleid"])) {
	$vehicleid = "";
$vehicleidErr = "<p class=\"animated bounce red\">Vehicle is Required.</p>";
 
$error = true;
 
}else{ 

$vehicleid = test_input($_POST["vehicleid"]);
if (!preg_match("/^[0-9 ]*$/",$vehicleid)) {
      $vehicleidErr = "<p class=\"animated bounce red\">Vehicle stocknumber requires numbers only</p>"; 
      $error = true;
	  
	 
 
}
}
 
 } 
  if (!$error) {
 

 include("connect.php");
 
 $date=date('y.m.d');
 
$queryadd = "INSERT INTO Shoppingcart (`Stocknumber` ,`idCustomers`,`idSalespersons`,`Date`)
VALUES ('$vehicleid', '$customerid','$salespersonid','$date')";
 
$updatedb = mysqli_query($con,$queryadd);

  mysqli_close($con);

 if ($updatedb) {
	 $message = "";
 $message = "<br><p class=\"animated bounce green\">You have been successfully added to the mailing list.</p>" ;

 }else{
	 $message = "";
   $message = "<br><p class=\"animated bounce red\"> Your information could not be added to the mailing list.</p>";

} 
 

 }  
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 
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
 



      <div class="row">
      
        <div class="col-lg-offset-0 col-lg-12">  
        
    <form class="loginformnew"   method="post">
  <fieldset class="account-info" >
Salesperson:<br>

 <br>



<!-- <select name="users"  onChange="showSalesperson(this.value)">
  <option value="">Select a salesperson:</option> -->
  <?php 
   include("connect.php");	 
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
<th>Salesperson ID</th> 
<th>Name</th>
<th>Phone</th> 
<th>Email</th>  
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['idSalespersons'] . "</td>"; 
	    echo "<td>" . $row['Fullname'] . "</td>";

    echo "<td>" . $row['Phone'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";

echo "</table>";
 
 
 echo "<input  type=\"hidden\"  name=\"salespersonid\" value=".$row['idSalespersons']."> ";
} }
?>
 
 
  
<br>
<br>
 
Customers:<br>
<br>
<select name="customerid">
<option value="">Select a customer:</option>
<?php 


$query = "SELECT * FROM Customers WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)){
echo "<option value=\"".$row['idCustomers']."\">".$row['Fullname']."</option>";
}
?> 


  </select>
 
<br>
<br>
          
 
   
   Vehicles:<br>
<select name="vehicleid">
<option value="">Select a vehicle:</option>
<?php 
 


$query = "SELECT * FROM Vehiclelist WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)){
echo "<option value=\"".$row['Stocknumber']."\">".$row['Year']. ' ' .$row['Manufacturer'].' '.$row['Model']."</option>";
}
?> 
 
  </select>
  <br>
  </fieldset>
  <br><br>
    <fieldset class="account-action" >
    <input type="submit" value="Submit" name="submit" class="btn left">
  
  <input type="button" value="Go Back"  onClick="window.location.href='sales.php'" class="btn right">
     
  </fieldset>  
 
      
  </form>
  
  <?php
 
 // shows errors
  
	 echo $message;
 echo $salepersonidErr .  $customeridErr . $vehicleidErr ;
 
?>
    
      
</div>   
</div>
 
      <hr>
        <div class="row center-block">
         <br><br><br>
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