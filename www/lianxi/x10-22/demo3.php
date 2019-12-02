<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM user1 WHERE id=1";
	$sql = "SELECT * FROM smallsan WHERE uid=1";
	SELECT U.id as uid,u.name uname,sex,age,s.id sid,s.name sname,uid FROM user u,smallsan s WHERE u.id=1 and u.id=s.uid
	SELECT *from user1 as smallsan;
	SELECT id as 'uid',name as 'uname',sex,age,city from user1;
	select id as 'sid',name as 'sname',uid as 'suid' from smallsan;
	select * from user1 and smallsan;
	select user1.uname,
	select * from user1 and smallsan where id=1;
	select * from user1 and smallsan where user1.id=1 and smallsan.uid=1;
	select user1.id as uid,user1.name uname,sex,age,smallsan.id sid,smallsan.name sname,uid from user1,smallsan WHERE user1.id=1 and user1.id=smallsan.uid; 
	select uid,user1.name,sex,age,city,smallsan.id,smallsan.name,uid from user1,smallsan where user1.id=2 and user1.id=smallsan.uid;
?>