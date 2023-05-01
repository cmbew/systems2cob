<?php

include_once 'connect.php';

$fName = $_REQUEST['fName'];
$lName = $_REQUEST['lName'];
$pName = $_REQUEST['prefName'];
$email = $_REQUEST['eMail'];
$address = $_REQUEST['mailing'];


$sql = "INSERT INTO tranfer(fName, lName, pName, email, address) VALUES ('$fName','$lName','$pName','$email','$address')";


mysqli_query($conn,$sql);

mysqli_close($conn)

?>