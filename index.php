<?php

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

$dbc=mysqli_connect('localhost', 'root', '');

mysqli_query($dbc,'CREATE DATABASE robot_database;');
mysqli_select_db($dbc, 'robot_database');

$query = 'CREATE TABLE IF NOT EXISTS handles_values(ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, h1 INT, h2 INT , h3 INT , h4 INT , h5 INT , h6 INT );';
mysqli_query($dbc, $query);

	$v1 = $_POST['h1'];
	$v2 = $_POST['h2'];
	$v3 = $_POST['h3'];
	$v4 = $_POST['h4'];
	$v5 = $_POST['h5'];
	$v6 = $_POST['h6'];
	
	if (isset($_POST['save'])) {
		$query = "INSERT INTO handles_values(h1, h2, h3, h4,h5,h6) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6');";
		if (mysqli_query($dbc, $query)) {
			echo "Updated";
		} else {
			echo "<br>" . mysqli_error($dbc);
		}
		header('location: index.html');
	}
	
	//mysqli_close($dbc);

/////////////////////////////////////////
$query1 = 'CREATE TABLE IF NOT EXISTS on_values(ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,handle_on VARCHAR(10));';
mysqli_query($dbc, $query1);

      if (isset($_POST['on'])) {

		$query = "INSERT INTO on_values(handle_on) VALUES ('on');";
		if (mysqli_query($dbc, $query)) {
			echo "Updated";
		} else {
			echo "<br>" . mysqli_error($dbc);
		}
		header('location: index.html');
	}
	mysqli_close($dbc);



?>