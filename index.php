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
    $sql = "SELECT * FROM flori";
    foreach($dbh->query($sql) as $row)
    {
        print $row['nume'].' - '.$row['culoare'].'-'.$row['marime'].'-'.$row['pret'].'-'.'<br />';
    }
    echo "<br/><br/>";
    $sql = "SELECT * FROM flori1";
    foreach($dbh->query($sql) as $row)
    {
        print $row['nume'].' - '.$row['culoare'].'-'.$row['marime'].'-'.$row['pret'].'-'.'<br />';
    }
    $dbh = null; // inchidem conexiunea la baza de date
}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>
<br/>
<a href="insert.php">Insert</a>
<a href="update.php">Update</a>
<a href="tranzactii.php">Tranzactii</a>