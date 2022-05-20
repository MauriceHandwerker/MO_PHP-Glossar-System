<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "MO_Glossar_System";
try {
	$conn = new PDO("pgsql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
                $conn = NULL;
	}
?>
