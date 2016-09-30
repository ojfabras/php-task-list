<?php

include_once 'database.php';

$table = "CREATE TABLE IF NOT EXISTS tasks
					(
						id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
						name VARCHAR(35) NOT NULL UNIQUE,
						description VARCHAR(255) NOT NULL,
						status VARCHAR(25) DEFAULT 'Not Completed',
						created_at TIMESTAMP
					)";

try {
	$conn->query($table);
	echo "Table created<br>";
} catch(PDOException $ex) {
	echo "An error occurred: ".$ex->getMessage()."<br>";
}