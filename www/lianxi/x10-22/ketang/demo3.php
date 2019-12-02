<?php

	SELECT * FROM user1 where id=1;

	SELECT * FROM smallsan where uid=1;
	SELECT * FROM user1,smallsan where user1.id and smallsan.id;

	SELECT * FROM user1 u,smallsan s where u.id and s.id; 
	//SELECT * FROM u,s where u,id and s,id;
	SELECT u.id,u.name,sex,age,city,s.id,s.name,uid from
	user1 u,smallsan s where u.id and s.id;


	SELECT u.id,u.name,sex,age,city,s.id,s.name,uid from
	user1 u,smallsan s where u.id=1 and u.id=s.uid;




?>