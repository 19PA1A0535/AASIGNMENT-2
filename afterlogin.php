<?php
	include("creatingdb.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["email"];
		$pass = $_POST["pass"];
