<?php

include_once 'connect.php';

$fName = $_REQUEST['fName'];
$lName = $_REQUEST['lName'];
$pName = $_REQUEST['pName'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$hSchool = $_REQUEST['hSchool'];
$gpa = $_REQUEST['gpa'];
$gYear = $_REQUEST['gYear'];
$standing = $_REQUEST['standing'];
$major = $_REQUEST['major'];


$sql = "INSERT INTO student(fName, lName, pName, email, address, hSchool, gpa, gYear, standing, major) VALUES ('$fName','$lName','$pName','$email','$address','$hSchool','$gpa','$gYear','$standing','$major')";


mysqli_query($conn,$sql);

mysqli_close($conn)

?>

