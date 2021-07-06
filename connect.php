<?php
/*** mysql hostname ***/
$hostname = 'localhost';
/*** mysql username ***/
$username = 'root';
/*** mysql password ***/
$password = '';
try{
    $dbh = new PDO("mysql:host=$hostname;dbname=flori",$username,$password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
    $dbh = null; // inchidem conexiunea la baza de date
}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>