<?php
if (isset($_POST['login'])) {
    $servername = "localhost";
$username = "id13568792_glogins";
$password = "qFqw4gCx~xdCv8T8";
$dbname = "id13568792_glogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$email = trim($_POST['email']);
  $upass = sha1(trim($_POST['password']));
  $h_upass = sha1($upass);
if ($upass == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "login.php";
                </script>
        <?php
}else{
//create some sql statement             
        $sql = "SELECT * FROM  Login WHERE  email =  '" . $email . "' AND  SHA1(password)  =  '" . $upass . "'";
        $result = mysqli_query($conn, $sql);

        if ($result){
             //get the number of results based n the sql statement
        $numrows = mysqli_num_rows($result);
     
        //check the number of result, if equal to one   
        //IF theres a result
            if ($numrows == 1) {
                //store the result to a array and passed to variable found_user
                // $found_user  = mysqli_fetch_array($result);

                // //fill the result to session variable
                // $_SESSION['MEMBER_ID']  = $found_user['id']; 
                // $_SESSION['FIRST_NAME'] = $found_user['fName']; 
                // $_SESSION['LAST_NAME']  =  $found_user['lName']; 
           
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
                      window.location = "home.php";
                  </script>
             <?php        
           
        
            } else {
            //IF theres no result
              ?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php

            }

         } else {
                 # code...
         die("Table Query failed: " );
        }
        
    }       
} 