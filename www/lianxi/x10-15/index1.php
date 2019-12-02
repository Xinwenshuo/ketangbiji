<?php
include './MySQL.class.php';
$mysql = new MySQL();
$sql = "insert into user(name,age) values('飞飞',70)";
$mysql->getAll($sql);

?>