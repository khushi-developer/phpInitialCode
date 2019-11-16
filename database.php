<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phptut";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("error".mysqli_connect_error());
}
else{
    echo "connection successfull"; 
}
$sql = "INSERT INTO `users` (`serial_no`, `name`, `age`, `salary`) VALUES ('2', 'name2', '34', '20000')";
if(mysqli_query($conn,$sql))
{
    echo "success";
}
else
{
    echo "error". mysqli_error($conn);
}

mysqli_close($conn);

?>