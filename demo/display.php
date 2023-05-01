<?php


include_once 'connect.php';

$sql = "SELECT * FROM student";

$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result) > 0)
{

    while($row= mysqli_fetch_assoc($result))
    {
    echo   $row["fName"]  ." ". $row["lName"] ." ". $row["email"] . "<br>";
    }
}
else
{
    echo "0 results";
}

?>