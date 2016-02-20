<?php
$message = "<br><p></p><br>";
 $firstnameErr = $lastnameErr = $emailErr = $error = $error1 = "<br><p></p><br>";
 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	 
if (empty($_POST["firstname"])) {
	$firstname = "";
$firstnameErr = "<p class=\"animated bounce red\">First Name is Required.</p>";
 
$error = true;
 
}else{ 

$firstname = test_input($_POST["firstname"]);
if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
      $firstnameErr = "<p class=\"animated bounce red\">Only letters</p>"; 
      $error = true;
	  
	 
} else {
	
$error = false;	
}
}

 if (empty($_POST["lastname"])) {
	$lastname = "";
$lastnameErr = "<p class=\"animated bounce red\">Last Name is Required</p>";
$error = true;
 
} else {


$lastname = test_input($_POST["lastname"]);	
if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
      $lastnameErr = "<p class=\"animated bounce red\">Only letters</p>"; 
      $error = true;
	 
}else {
	
$error = false;	
}
} 

 if (empty($_POST["email"])) {
	$email = "";
$emailErr = "<p class=\"animated bounce red\">Email is Required</p>";
$error = true;

 
} else {


$email = test_input($_POST["email"]);	
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "<p class=\"animated bounce red\">Invalid email format</p>"; 
      $error = true;
 
}else {
	
$error = false;	
}
} 

 }
 if (!$error) {
 

 include("connect.php");
 
$queryadd = "INSERT INTO emaillist (`user_ID`, `firstname` ,`lastname`,`email`)
VALUES (NULL, '$firstname', '$lastname','$email')";

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
 
 
 /*include("connect.php");
 if($_POST) {
 
 
 $firstname = $_POST['firstname']; 
  
 
  $lastname = $_POST['firstname']; 
 
 $email = $_POST['email'];
  
 
 
$queryadd = "INSERT INTO emaillist (user_ID, firstname, lastname, email)
VALUES (NULL,'$firstname', '$lastname', '$email')";
$updatedb = mysqli_query($con,$queryadd);

 mysqli_close($con);

if ($updatedb) {
 $message = "<br><p class=\"animated bounce green\">You have been successfully added to the mailing list.</p>" ;

 }else{
   $message = "<br><p class=\"animated bounce red\"> Your information could not be added to the mailing list.</p>";

 }
}*/
 
 




?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AllStyle Homes</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css">
 <link href="../css/animate.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="../css/css3buttons.css" media="screen"> 
 
</head>

<body>
<div class="wrapper">
<!--<header>-->
	 <div class="headerwrapper">
		 <div class="leftheader"><img id="effectimg"  class="displayed" src="../images/logo.png"   alt="AllStyle Homes Logo"></div>
         <div class="rightheader">
         <h2>Contact details:<br>
        255 Serenity Drive <br> 
        Ph: 07 4153 9876<br></h2> 
        </div>
    </div>
		 
<nav>
	 <ul>
	  <li><a href="../index.html">Home</a></li>
	  <li><a href="../pages/about.html">About</a></li>
	  <li><a href="../pages/design.html">Designs</a></li>
      <li><a href="../pages/ourprocess.html">Our Process</a></li>
      <li><a href="../pages/faq.html">FAQ</a></li>
      <li><a href="../pages/testimonials.html">Testimonials</a></li>  
      <li><a href="../pages/contact.html">Contact</a></li>            
     </ul>
			
</nav>
		
		
<!--</header>-->

<!--<section class="cluster cluster-1">-->


<!--content wrapper for mainbar and sidebar-->
 <div class="contentwrapper">
  <div class="mainbar"> 
 <h3>AllStyle Homes Mailing List </h3>   
<br>
<form class="loginform" method="POST">
  <fieldset class="account-info" >
	<label>Enter Full Name and Email:</label>
   
    <label>
      First Name
      <input  type="text"  name="firstname" placeholder="First Name" value="<?php if (isset($_POST['firstname'])) echo htmlentities($_POST['firstname']); ?>"> 
    </label>
    <label>
      Last Name
    <input  type="text"  name="lastname" placeholder="Last Name" value="<?php if (isset($_POST['lastname'])) echo htmlentities($_POST['lastname']); ?>">
     </label>
         <label>
      Email
    <input type="text"  name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) echo htmlentities($_POST['email']); ?>">
     </label>
     
  </fieldset>
  
    <fieldset class="account-action" >
    <input type="submit" value="Submit" name="submit" class="btn left">
  
  <input type="button" value="Login"  onClick="window.location.href='admin.php'" class="btn right">
     
  </fieldset>
  
  
</form>
 
<?php
 
 // shows errors
  
	 echo $message;
 echo $firstnameErr .  $lastnameErr . $emailErr;
  
?>
 


<br><br>
<!--<img class="displayed" src="../images/mailinglist.png"  alt="mailing list image" >-->
</div>
  
  
  <div class="sidebar"> <br>

  
 <br>


 
 <a  href="https://greatstartgrant.osr.qld.gov.au/" target="_blank" ><img  class="displayed" src="../images/grant.png" alt="New Start Grant" height="130" width="180">  </a>
     

      <a  href="../design.html" ><img class="displayed"  src="../images/340.PNG" alt="Home and Land from $340 per week" height="130" width="180">  </a>  
     
  

     <a  href="../design.html" ><img class="displayed"  src="../images/land.PNG" alt="Home and land from 270000" height="130" width="180">    </a>
    
   

        <a  href="https://greatstartgrant.osr.qld.gov.au/quick-calculate.php" target="_blank" ><img class="displayed"  src="../images/loan.PNG" alt="Loan Calculator" height="130" width="180"></a>     
    </div>
   
  </div>
 
   <div class="footer">  <a href="../pages/privacy.html" >© 2012 AllStyle Homes - Copyright and Privacy Information</a> </div>

  </div>
<!--</section>-->
 
<script>
 
var effectimg = document.getElementById("effectimg");
 

window.onload = function(){
	
 
 effectimg.addEventListener("click", function(){
 effectimg.className = "displayed animated flipInX";
 
 setTimeout(function() {
 effectimg.className = "displayed";	 
 },1500);	 
 
    }	);  
 
 
};
 </script>

 <script type="text/javascript">
// window.onload = function(){
 var day = new Date();
  var hr = day.getHours();
  if ((hr == 18) ||(hr == 19) || (hr == 20) || (hr == 21) || (hr == 22) || (hr == 23)|| (hr == 0)|| (hr == 1)|| (hr == 2)|| (hr == 3)|| (hr == 4)|| (hr == 5)|| (hr == 6)    ) {
 
 var cssnew = document.querySelector("link[href='../css/styles.css']");
 
 cssnew.setAttribute("href", "../css/stylesnew.css");
 
 
 }
  
 
 </script>


</body>
</html>
