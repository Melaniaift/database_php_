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
    echo 'Connected to database<br />';
    $count = $dbh->exec("UPDATE flori SET pret='90' WHERE nume='trandafiri'");
    echo $count;
    $dbh = null; // inchidem conexiunea la baza de date
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
<br/>
<a href="index.php">Index</a>