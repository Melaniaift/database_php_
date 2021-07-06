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
    $count = $dbh->exec("INSERT INTO flori(nume, culoare, marime, pret) VALUES ('trandafiri','rosii','mari','30')");
    //inseram in baza de date flori: http://localhost/Phpcurs1an3/insert.php
    echo $count;
    $dbh = null; // inchidem conexiunea la baza de date
}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>
<a href="index.php">Index</a>