<?php
$server_name="localhost";
$username="root";
$password="";
$dbname="yuktibisht";
$conn=mysqli_connect($server_name,$username,$password,$dbname);
if($conn)
{
    echo "Connection OK";
}
else{
    echo "Connection Failed";
}
? >