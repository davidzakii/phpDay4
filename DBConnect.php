<?php 
$serverName="localhost";
$username="root";
$password="";
$dbname="phpday4";

try{
    $connect= new PDO("mysql:host=$serverName;dbname=$dbname",$username,$password);
    //echo 'good';
}catch(Exception $e){
    echo $e->getMessage();
}
?>
