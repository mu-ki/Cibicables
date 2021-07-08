<?php

if(count($_POST)>0){

include 'Config.php';

$custid = $_POST['custId'];
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

$query="UPDATE `customers` SET `name`='$name',`number`='$number',`telephone`='$telephone',`ftthus`='$ftthus',`ftthps`='$ftthps',`status`='$status',`vlan`='$vlan',`pon`='$pon',`port`='$port',`macid`='$macid',`plan`='$plan',`operator`='$operator',`connectiondate`='$connectiondate',`commisionamount`='$commisionamount' WHERE $custid";
 
if (mysqli_query($dbCon, $query)) {
    $msg = 2;
 } else {
    $msg = 4;
 }

}

header ("Location: customers.php?msg=".$msg."");

?>