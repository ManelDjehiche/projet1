<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


$user='root';
$password='';
$dbname='mysql:host=localhost;dbname=projet1';
$pdo=new PDO($dbname,$user,$password);

$requete=$pdo->query('SELECT * FROM user');
while($result=$requete->fetch()){

    echo '<br>user::'.$result['USERNAME'];
    echo '<br>password::'.$result['PASSWORD'];

}


exit();
$pdo->query('INSERT INTO user(USERNAME,PASSWORD) VALUES ("manel","1234") ');
?>