<?php

$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
$pdo = new PDO($mysql,'root','xws1998');
$pdo->setattribute(3,1);
$sql = "insert into jiao(name,sex,age,city) values(?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$sex);
$stmt->bindParam(3,$age);
$stmt->bindParam(4,$city);
$name = 'hh';
$sex = 2;
$age = 2;
$city = 'sf';
$bool = $stmt->execute();
var_dump($bool);


?>