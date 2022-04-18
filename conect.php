<?php

$conect = new PDO("mysql:dbname=videoaula_b4;host=localhost;charset=utf8","root","");
$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);