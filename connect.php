<?php

$servername = "localhost";
$port = "1586";
$username = "maurice";
$password = "MOMO";
$dbname = "glossary";
try {
	$conn = new PDO("pgsql:host=$servername;port=$port;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
                $conn = NULL;
	}
?>