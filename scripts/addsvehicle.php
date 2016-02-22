<?php
include("connect.php");	 

 session_start();
if (!isset($_SESSION['username'])) {
 header('location:login.php');
}
 
$message = "<br><p></p><br>";
$manufacturerErr = $modelErr = $categoryErr = $yearErr = $priceErr = $kilometresErr = $colourErr = $registrationErr = $vinErr = $cylindersErr  = $fuelErr = $transmissionErr  = $error =  "<p></p>";
 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	$error = false; 
if (empty($_POST["manufacturer"])) {
	$manufacturer = "";
$manufacturerErr = "<p class=\"animated bounce red\">Manufacturer is Required.</p>";
 
$error = true;
 
}else{ 

$manufacturer = test_input($_POST["manufacturer"]);
if (!preg_match("/^[a-zA-Z]*$/",$manufacturer)) {
      $manufacturerErr = "<p class=\"animated bounce red\">Manufacturer requires letters only</p>"; 
      $error = true;
	  
	 

}
}

if (empty($_POST["model"])) {
	$model = "";
$modelErr = "<p class=\"animated bounce red\">Model is Required</p>";
$error = true;
 
} else {


$model = test_input($_POST["model"]);	
if (!preg_match("/^[a-zA-Z0-9]*$/",$model)) {
      $modelErr = "<p class=\"animated bounce red\">Model requires letters and numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["category"])) {
	$category = "";
$categoryErr = "<p class=\"animated bounce red\">Category is Required</p>";
$error = true;
 
} else {


$category = test_input($_POST["category"]);	
if (!preg_match("/^[a-zA-Z0-9 ]*$/",$category)) {
      $categoryErr = "<p class=\"animated bounce red\">Category requires letters and numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["year"])) {
	$year = "";
$yearErr = "<p class=\"animated bounce red\">Year is Required</p>";
$error = true;
 
} else {


$year = test_input($_POST["year"]);	
if (!preg_match("/^[0-9]*$/",$year)) {
      $yearErr = "<p class=\"animated bounce red\">Year requires numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["price"])) {
	$price = "";
$priceErr = "<p class=\"animated bounce red\">Price is Required</p>";
$error = true;
 
} else {


$price = test_input($_POST["price"]);	
if (!preg_match("/^[0-9,.]*$/",$price)) {
      $priceErr = "<p class=\"animated bounce red\">Price requires numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["kilometres"])) {
	$kilometres = "";
$kilometresErr = "<p class=\"animated bounce red\">Kilometres is Required</p>";
$error = true;
 
} else {


$kilometres = test_input($_POST["kilometres"]);	
if (!preg_match("/^[0-9,.]*$/",$kilometres)) {
      $kilometresErr = "<p class=\"animated bounce red\">Kilometres requires numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["colour"])) {
	$colour = "";
$colourErr = "<p class=\"animated bounce red\">Colour is Required</p>";
$error = true;
 
} else {


$colour = test_input($_POST["colour"]);	
if (!preg_match("/^[a-zA-Z]*$/",$colour)) {
      $colourErr = "<p class=\"animated bounce red\">Colour requires letters only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["registration"])) {
	$registration = "";
$registrationErr = "<p class=\"animated bounce red\">Registration is Required</p>";
$error = true;
 
} else {


$registration = test_input($_POST["registration"]);	
if (!preg_match("/^[0-9]*$/",$registration)) {
      $registrationErr = "<p class=\"animated bounce red\">Registration requires numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["vin"])) {
	$vin = "";
$vinErr = "<p class=\"animated bounce red\">Vin is Required</p>";
$error = true;
 
} else {


$vin = test_input($_POST["vin"]);	
if (!preg_match("/^[0-9]*$/",$vin)) {
      $vinErr = "<p class=\"animated bounce red\">Vin requires numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["cylinders"])) {
	$cylinders = "";
$cylindersErr = "<p class=\"animated bounce red\">Cylinders is Required</p>";
$error = true;
 
} else {


$cylinders = test_input($_POST["cylinders"]);	
if (!preg_match("/^[0-9]*$/",$cylinders)) {
      $cylindersErr = "<p class=\"animated bounce red\">Cylinders requires numbers only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["fuel"])) {
	$fuel = "";
$fuelErr = "<p class=\"animated bounce red\">Fuel is Required</p>";
$error = true;
 
} else {


$fuel = test_input($_POST["fuel"]);	
if (!preg_match("/^[a-zA-Z]*$/",$fuel)) {
      $fuelErr = "<p class=\"animated bounce red\">Fuel requires letters only</p>"; 
      $error = true;
	 
 
}
} 

if (empty($_POST["transmission"])) {
	$transmission = "";
$transmissionErr = "<p class=\"animated bounce red\">Transmission is Required</p>";
$error = true;
 
} else {


$transmission = test_input($_POST["transmission"]);	
if (!preg_match("/^[a-zA-Z]*$/",$transmission)) {
      $transmissionErr = "<p class=\"animated bounce red\">Transmission requires letters only</p>"; 
      $error = true;
	 
 
}
} 

 } 
  if (!$error) {
 

 include("connect.php");
 
$queryadd = "INSERT INTO `vehiclelist` (`Manufacturer`, `Model`, `Category`, `Year`, `Price`, `Kilometres`, `Colour`, `Registration`, `Vin`, `Cylinders`, `Fuel`, `Transmission`) 
VALUES ('$manufacturer', '$model', '$category','$year','$price','$kilometres','$colour','$registration','$vin','$cylinders','$fuel','$transmission')";


$updatedb = mysqli_query($con,$queryadd);

  mysqli_close($con);

 if ($updatedb) {
	 $message = "";
 $message = "<br><p class=\"animated bounce green\">You have successfully added a new vehicle to the database.</p>" ;

 }else{
	 $message = "";
   $message = "<br><p class=\"animated bounce red\"> Your information could not be added to the database.</p>";

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

   




    <title>West Coast Auto - Add Vehicle</title>
    <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
   <link href="../css/animate.css" rel="stylesheet"> 
  
  
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
        
        <div class="col-sm-7 col-sm-offset-1 col-lg-offset-1 col-lg-11">
         <hr>
       <h3 >West Coast Auto - Add Vehicle</h3>  <br>
       
         <div class="row">
        
        <div class="col-sm-7 col-sm-offset-1 col-lg-offset-4 col-lg-4"> 
 
 
 

    <form class="loginform formcentre"   method="post">
  <fieldset class="account-info" >
<!--<p>
<label for="stocknumber">Stock No:</label>
<input type="text" name="stocknumber" id="stocknumber" value="<?php if (isset($_POST['stocknumber'])) echo htmlentities($_POST['stocknumber']); ?>" />
</p>-->
 

 
<!--  <label for="manufacturer">Manufacturer:</label>
<input type="text" name="manufacturer" id="manufacturer" value="<?php if (isset($_POST['manufacturer'])) echo htmlentities($_POST['manufacturer']); ?>" />
-->

<label>Manufacturer:
<br>
<select name="manufacturer">
<?php 

 include("connect.php");

$query = "SELECT Manufacturer FROM manufacturer";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result))    {
echo "<option value=\"". $row['Manufacturer'] ."\">" . $row['Manufacturer'] . "</option>";
}
?>
</select>
</label>

<label>Model:
<input type="text" name="model" id="model" value="<?php if (isset($_POST['model'])) echo htmlentities($_POST['model']); ?>" />
</label>

<!--<p>
<label for="category">Category:</label>
<input type="text" name="category" id="category" value="<php if (isset($_POST['category'])) echo htmlentities($_POST['category']); ?>" />
</p>-->


 

 <label>Category:
 <br>

<select name="category">
<?php 
include("connect.php");

$query = "SELECT Category FROM Category";
$result = mysqli_query($con,$query);

  
 while ($row = mysqli_fetch_array($result))   {
echo "<option value=\"".$row['Category']."\">". $row['Category'] . "</option>";
}
?>  
</select>
</label>

<!--  <select id="category" name="category" style="width:190px">
    <option value="Cab Chassi">Cab Chassis</option>
    <option value="Coupe">Coupe</option>
     <option value="Light Truck">Light Truck</option>  
     <option value="Sedan">Sedan</option>  
     <option value="Ute">Ute</option>  
     <option value="Wagon">Wagon</option>  
     <option value="Convertible">Convertible</option>  
     <option value="Hatch">Hatch</option>  
     <option value="People Mover">People Mover</option>  
     <option value="SUV">SUV</option>  
     <option value="Van">Van</option>    
             
        </select>
        
-->        
 
<label>Year:<br>
<input type="text" name="year" id="year" value="<?php if (isset($_POST['year'])) echo htmlentities($_POST['year']); ?>" />
</label>

<label>Price:<br>
<input type="text" name="price" id="price" value="<?php if (isset($_POST['price'])) echo htmlentities($_POST['price']); ?>" />
</label>

<label>Kilometres:<br>
<input type="text" name="kilometres" id="kilometres" value="<?php if (isset($_POST['kilometres'])) echo htmlentities($_POST['kilometres']); ?>" />
</label>
<!--<p>
<label for="colour">Colour:</label>
<input type="text" name="colour" id="colour" value="?php if (isset($_POST['colour'])) echo htmlentities($_POST['colour']); ?>" />
</p>
-->
 

 <label>Colour:<br>

  <select  name="colour" >
    <option value="Beige">Beige</option>
    <option value="Black">Black</option>
     <option value="Blue">Blue</option>  
     <option value="Bronze">Bronze</option>  
     <option value="Brown">Brown</option>  
     <option value="Gold">Gold</option>  
     <option value="Green">Green</option>  
     <option value="Grey">Grey</option>  
     <option value="Magenta">Magenta</option>  
     <option value="Maroon">Maroon</option>  
     <option value="Orange">Orange</option>    
     <option value="Pink">Pink</option>        
     <option value="Purple">Purple</option> 
     <option value="Red">Red</option>      
     <option value="Silver">Silver</option>      
     <option value="White">White</option>   
     <option value="Yellow">Yellow</option>           
        </select>
</label>

<label >Registration:<br>
<input type="text" name="registration" id="registration" value="<?php if (isset($_POST['registration'])) echo htmlentities($_POST['registration']); ?>" />
</label>


<label>Vin:   <br>
<input type="text" name="vin" id="vin" value="<?php if (isset($_POST['vin'])) echo htmlentities($_POST['vin']); ?>" />
</label>

<!--<p>
<label for="cylinders">Cylinders:</label>
<input type="text" name="cylinders" id="cylinders" value="?php if (isset($_POST['cylinders'])) echo htmlentities($_POST['cylinders']); ?>" />
</p>
-->
 
<label>Cylinders:<br>

  <select  name="cylinders" >
<!--    <option value="0">0</option>
-->    <option value="1">1</option>
     <option value="2">2</option>  
     <option value="3">3</option>  
     <option value="4">4</option>  
     <option value="5">5</option>  
     <option value="6">6</option>  
     <option value="7">7</option>  
     <option value="8">8</option>  
     <option value="9">9</option>  
     <option value="10">10</option>    
     <option value="11">11</option>        
     <option value="12">12</option>        
        </select>
 </label>       


<!--<p>
<label for="fuel">Fuel:</label><br>
<input type="text" name="fuel" id="fuel" value="" /> ?php if (isset($_POST['fuel'])) echo htmlentities($_POST['fuel']); ?></p>-->


 <label>Fuel:<br>

  <select name="fuel" >
    <option value="Diesel">Diesel</option>
    <option value="Electric">Electric</option>
     <option value="LPG">LPG</option>  
     <option value="Petrol">Petrol</option>  
     
        </select>
</label>



<!--<p>
<label for="transmission">Transmission:</label>
<input type="text" name="transmission" id="transmission" value="<" />
</p>
?php if (isset($_POST['transmission'])) echo htmlentities($_POST['transmission']); ?>-->
 

 <label>Transmission:<br>

  <select  name="transmission" >
        <option value="Automatic">Automatic</option>
    <option value="Manual">Manual</option>
   

     
        </select>
</label>

  
 
 </fieldset>
 <fieldset class="account-action" >
 <button type="submit"  name="submit"   class="btn btn-sm btn-default">Submit</button>
 <button type="button"  name="submit" onClick="window.location.href='vehiclelist.php'" class="btn btn-sm btn-default" >Go Back</button>
  </fieldset>
 

</form>

<?php
 
 // shows errors
  
	 echo $message."<br>";
 echo $manufacturerErr .  $modelErr . $categoryErr . $yearErr . $priceErr . $kilometresErr . $colourErr . $registrationErr . $vinErr . $cylindersErr . $fuelErr . $transmissionErr  ;
   
 
?>

  
  </div>
 

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