<?php

$dsn = 'mysql:host=localhost;dbname=xin;charset=utf8';
$pdo = new PDO($dsn,'root','xws1998');
$pdo->setAttribute(3,1);
var_dump($pdo);
$sql= "select * from jiao";
var_dump($sql);
$mn = $pdo->query($sql);
var_dump($mn);
$dsn = 'mysql:host=localhost;dbname=xin;charset=utf8';
$pdo = new PDO($dsn,'root','xws1998');
$pdo->setAttribute(3,1);
$sql = "select *from jiao";
$mu = $pdo->query($sql);
var_dump($mu);
?>