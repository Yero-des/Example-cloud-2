<?php

	function conexion(){

	$host = "host=containers-us-west-39.railway.app";
	$port = "port=7812";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=B6druld1rAJslBiCufp2";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>