<?php
// $servername = "localhost";
// $username = "root";
// $serverpassword = "";
// $dbname = "testoop";
// try{
//     $dns ="mysql:host=".$servername.";dbname=".$dbname;
//     $conn = new PDO ($dns,$username,$serverpassword);
//     echo"siiiiiiiiir";
// }catch(PDOException $e){
//     echo"error conn";
// }

$servername = "localhost";
$username = "root";
$serverpassword = "";
$dbname = "";
try{
$dns = "mysql:host=".$servername.";dbname=".$dbname;
$conn = new PDO ($dns,$username,$password);
}catch(PDOException $e){
    echo "error conn";
}
