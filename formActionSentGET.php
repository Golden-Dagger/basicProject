<?php
$password= "";
$userName= "root";
$serverName= "localhost";
$dbName= "test";
$connection= mysqli_connect($serverName, $userName, $password, $dbName);
//var_dump($connection);
 
//var_dump($_POST);
 $a=$_GET["userName"];
 echo $a;
 $b=$_GET["password"];
 echo $b;

$mysql= "UPDATE user SET userName= '$a' WHERE userName= 'Puneet'";
$result= $connection->query($mysql);
//var_dump($result);
if($connection)
echo "hoGaya";

else
echo "Nahi hua";
 $connection-> close();

?>