<html>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>body{background:#28334AFF;}
.alert {
  padding: 20px;
  background-color: #fff; /* Red */
  width:50%;
  color:black;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  color:red;
  transition: 0.3s;
}
.center {
  margin: 0;
  width:100%;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}</style><body><img class="center"  src="logof.png"><?php

ob_start(); 

session_start();
$servername = "localhost";
$username = "id13568792_glogins";
$password = "qFqw4gCx~xdCv8T8";
$dbname = "id13568792_glogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    if(isset($_POST['regis'])){
    $n = $_POST['name'];
$p = $_POST['phone'];
$e = $_POST['email'];


$pa =  $token = bin2hex(random_bytes(5));;


$lol="select * from Login where email = '$e'"; 
$result = mysqli_query($conn, $lol);


if(mysqli_num_rows($result) > 0)
    
{
    	?>
 		   		<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
 OOPS!! You are already registered.
</div>	</center>
 
 	
 		<?php
   
    
}

else{

//connection check
if($conn->connect_error){
	die('Connection Failed	: '.$conn->connect_error);
}
else{
	
		  $lol="INSERT INTO Login (name,email,password, phone)
VALUES ( '$n', '$e', '$pa', '$p')";


    if (mysqli_query($conn, $lol)) {
    
    	?>
 	   		<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
 Congratulations!! You are successfully registered to Nearcarts. Kindly check your mail for password and more details.
</div>	</center>
 
 		<?php	$to = $e;
$subject1 = 'Welcome to Nearcarts';
 	$message1 = "Hi ".$n.", \n". "You have sucessfully registered in Nearcarts. Now you find your password below .\nNote: This is a system generated password and we advice you to change it as soon as you login to Nearcarts.\n\n
 	Your Password is : ".$pa."\n
Thank you !\n\n
 	Do visit our site for more details : Nearcarts.com";
 	$header  = "From: Nearcarts <info@Nearcarts.com>";
 	 	if(mail($to, $subject1, $message1, $header))
 	{
      	}
 	else
 	{
 
 	}
    }//end then
    else {
     echo $conn->error;
    	?>
 		   		<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
 Error!! Retry after some time...
</div>	</center>
 
 		<?php
    }//end else
    
     
 }
}
}else{}  if(isset($_POST['login'])){
    
    
$GLOBALS["msg"] = "Congratulations!!" ;
$e = $_POST['email'];
$p = sha1($_POST['password']);





//Check if the sapid already exists in the database
$lol="select * from Login where email = '$e' and SHA1(password) ='$p'"; 

$result = mysqli_query($conn, $lol);

//Do not insert, instead display message that sapid already exists
if(mysqli_num_rows($result) ==1)
    
{
     while($row = $result->fetch_assoc()) {
       $name= $row["name"];

     } 
    //   header('Location:index.php');
      $_SESSION['name'] =$name;
    echo "<script>window.location.href='index.php';</script>";
    exit;

    // <!--<script>window.open('index.php','_self');</script>-->
    

 }
 else{
     ?>
     	<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
 Invalid Email or Password.
</div>	</center>
 
     <?php
 }
}else{}
if(isset($_POST['upass'])){

$GLOBALS["msg"] = "Congratulations!!" ;
$e = $_POST['email'];


$pa =  $token = bin2hex(random_bytes(5));



//Check if the sapid already exists in the database
$lol="select * from Login where email = '$e'"; 

$result = mysqli_query($conn, $lol);
$n="select name from Login where email = '$e'";
$re = mysqli_query($conn, $n);
//Do not insert, instead display message that sapid already exists
if(mysqli_num_rows($result) <= 0)
    
{
    	?>
 	<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
  OOPS!! You are not registered.Please register yourself with Nearcarts.
</div>	</center>
      
 	
 		<?php
   
    
}
if(mysqli_num_rows($result) > 0)
    
{
    	
     $lol="UPDATE Login SET password='$pa' WHERE email='$e'";


    if (mysqli_query($conn, $lol)) {

    	?>
    	<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
  Congratulations!! Your password have been changed. Kindly check your mail for  new password and more details.
</div>	</center>
    
 		<?php	$to = $e;
$subject1 = 'Welcome to Nearcars';
 	$message1 = "Hi, \n". "You can  find your new  password below .\nNote: This is a system generated password and we advice you to change it as soon as you login to Nearcarts.\n\n
 	Your Password is : ".$pa."\n
Thank you !\n\n
 	Do visit our site for more details : Nearcarts.com";
 	$header  = "From: Nearcarts <info@Nearcarts.com>";
 	 	if(mail($to, $subject1, $message1, $header))
 	{
      	}
 	else
 	{
 
 	}
    }//end then
    else {
    echo "<b>ERROR: unable to post.</b>";
     echo $conn->error;
    	?>
    		<center><div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';window.open('index.php','_self');">&times;</span>
 Error!! Retry after some time...
</div>	</center>
 
 		<?php
    }//end else
    
     
    
}
else{

//connection check
if($conn->connect_error){
	die('Connection Failed	: '.$conn->connect_error);
}

}

}
}
?>
</body></html>