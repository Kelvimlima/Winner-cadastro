<?php
	$conn = new mysqli("localhost", "root", "", "teste"); // conexão com o banco de dados

	if ($conn->connect_error) {
		echo "Error" . $conn->connect_error; //caso de erro na conexão
		exit;
	}
?>