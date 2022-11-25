<?php

$host= 'localhost';
$db = 'iot';
$user = 'postgres';
$password = 'postgres'; // change to your password


function connect(string $host, string $db, string $user, string $password): PDO
{
	try {
		$dsn = "pgsql:host=$host;port=5432;dbname=$db;";

		// make a database connection
		return new PDO(
			$dsn,
			$user,
			$password,
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
		);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

return connect($host, $db, $user, $password);
