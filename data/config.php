<?php
    $hName='ec2-18-214-208-89.compute-1.amazonaws.com'; // host name
    $uName='qfcqyzowrnmgfo';   // database user name
    $password='59d91ac2c79c3a78382d76266e3bdd4deb041b02eeec3fa073dbbc3584877375';   // database password
    $dbName = "dfmb2kgh0khiu0"; // database name
    $dbCon = $link = mysqli_connect($hName,$uName,$password,"$dbName");
    
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysqli_connect_error());
      }
?>