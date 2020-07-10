<?php

session_start();
setcookie("cookie", $_SESSION['id'], time()+4600);

function connect_to_database() 
{
    $severname="localhost";
    $username="";
    $password="";
    $databasename="base-site-routing";


$sth = $pdo->query("SELECT * FROM utilisateurs")->fetchALL()  

$sth->execute(array('admin', 'login')); 
$login = $sth->fetchAll();

$sth->execute(array('2020', 'password')); 
$password = $sth->fetchAll();
try
    {
        $pdo= new PDO("mysql:host=$severname;dbname=$databasename",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p><b>Vous êtes connecté</b></p>";
        $pdo->exec($sql);
    }
catch(PDOException $e) 
    {
         echo "<b>Vous n'êtes pas connecté</b>".$e->getMessage();
    }
}
$pdo = connect_to_database();


?>
