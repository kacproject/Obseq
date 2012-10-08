<?php

//incloim les dades del svr

/*$host="localhost"; // Host name
$user="grafikoh_regalam"; // Mysql username
$pass="j9vcpPqY"; // Mysql password
$db_name="grafikoh_regalame"; // Database name
$tbl_name="members"; // Table name
*/
$host="localhost"; // Host name
$user="grafikoh_regalam"; // Mysql username
$pass="j9vcpPqY"; // Mysql password
$db_name="grafikoh_regalame"; // Database name
$tbl_name="usuario"; // Table name
// Connect to server and select database.
mysql_connect("$host", "$user", "$pass")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// dades server

// Get values from form
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$fnacimiento = $_POST['fnacimiento'];
$sexo = $_POST['sexo'];
$password = $_POST['password'];
$localidad = $_POST['localidad'];



/////////////////////encriptar pass//////////////////////////////////////////////////////////
//$encrypted_mypassword=md5($password);
//$encrypted_myrepassword=md5($repassword);
//$sql="INSERT INTO $tbl_name(username, password, repassword, email, borndate)VALUES('$username', '$encrypted_mypassword', '$encrypted_myrepassword', '$email', '$borndate')";
//$result=mysql_query($sql);
/////////////////////encriptar pass//////////////////////////////////////////////////////////

/////////////////////pass sense encriptar/////////////////////
// Insert data into mysql
$encrypted_mypassword=md5($password);
$encrypted_myrepassword=md5($password);
$sql="INSERT INTO $tbl_name(nombre, mail, sexo, password, localidad, fnacimiento)VALUES('$nombre', '$mail', '$sexo', '$encrypted_mypassword', '$localidad', '$fnacimiento')"; 
$result=mysql_query($sql);
/////////////////////pass sense encriptar/////////////////////

// if successfully insert data into database, displays message "Successful".




// close connection
mysql_close();
?>
	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Bakcend I Admin Panel</title>
	</head>


	<body>
	<script type="text/javascript">window.location = "registro.php"</script>

	</body>
	</html>