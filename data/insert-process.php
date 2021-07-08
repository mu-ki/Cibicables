<?php

if(count($_POST)>0)
{    
     include 'Config.php';

     $name = $_POST['name'];
     $number = $_POST['number'];
     $telephone = $_POST['telephone'];
     $ftthus = $_POST['ftthus'];
     $ftthps = $_POST['ftthps'];
     $status = $_POST['status'];
     $vlan = $_POST['vlan'];
     $pon = $_POST['pon'];
     $port = $_POST['port'];
     $macid = $_POST['macid'];
     $plan = $_POST['plan'];
     $operator = $_POST['operator'];
     $connectiondate = $_POST['connectiondate'];
     $commisionamount = $_POST['commisionamount'];

 
 
     $query ="INSERT INTO `customers` (`custId`, `name`, `number`, `telephone`, `ftthus`, `ftthps`, `status`, `vlan`, `pon`, `port`, `macid`, `plan`, `operator`, `connectiondate`, `commisionamount`) VALUES (NULL, '$name', '$number', '$telephone', '$ftthus', '$ftthps', '$status', '$vlan', '$pon', '$port', '$macid', '$plan', '$operator', '$connectiondate', '$commisionamount')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }

}
  header ("Location: customers.php?msg=".$msg."");
?>