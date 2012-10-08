<?php
$directorio = $_SERVER['DOCUMENT_ROOT'].'/myadmin/admin/fotos/';

//incloim les dades del svr


$host="localhost"; // Host name
$user="grafikoh_regalam"; // Mysql username
$pass="j9vcpPqY"; // Mysql password
$db_name="grafikoh_regalame"; // Database name
$tbl_name="usuario"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$user", "$pass")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// dades server

$sql="SELECT * FROM $tbl_name ORDER BY username ASC";
$result=mysql_query($sql);

$sql2="SELECT * FROM $tbl_name ORDER BY username ASC";
$result2=mysql_query($sql2);
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Registro de usuarios</title>

	    <script src="jquery126.js" type="text/javascript"></script>
	    <script src="validate.js" type="text/javascript"></script>

<style type="text/css">
label{display: block;}
label.error{color:red;}
</style>
</head>


<body>

	
	
				<form name="form1" method="post" action="insert.php" id="registre">
				<select name="dia" id="dia" class="birthday">
                    <option selected="selected" value="Día">Día</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

				<select name="mes" id="mes" class="birthday">
                    <option selected="selected" value="Mes">Mes</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                </select>
                
				<select name="anyo" id="anyo" class="birthday">
                    <option selected="selected" value="Año">Año</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                </select>

                
					<label for="nombre">Nombre</label>
					<input class="textu" name="nombre" type="text" id="nombre" />
					
					<label for="password">Password</label>
					<input class="password_adv textu" name="password" type="password" id="password" />
					
					<label for="repassword">Repetir password</label>
					<input class="password_adv textu" name="repassword" type="password" id="repassword" />
					
					<label for="mail">E-Mail</label>
					<input class="textu" name="mail" type="text" id="mail" />
					
					<label for="localidad">Localidad</label>
					<input class="textu" name="localidad" type="text" id="localidad" />

					<input class="textu" name="fnacimiento" type="hidden" id="fnacimiento" />
					<label for="sexo">Sexo</label>
					<select name="sexo" id="sexo">
        	            <option selected="selected" value="Día">Sexo</option>
            	        <option value="1">Masculino</option>
                	    <option value="2">Femenino</option>
	                </select>


					<input id="submit" type="submit" name="Submit" value="Añadir registro" />
				</form>
				 

<hr>
<form id="myform" validate="novalidate">
  <label for="password">Password</label>
  <input name="password" id="password" class="valid">
  <br>
  <label for="password_again">Again</label>
  <input name="password_again" id="password_again" class="left valid">
  <input type="submit" value="Validate!" class="submit">
</form>
 <script>
  $(document).ready(function () {
  
    $("#myform").validate({
rules: {
password: "required",
password_again: {
equalTo: "#password"
}
}
});
  
	$("input.textu").val('');
	
	$('.birthday').change(function() {
	$campot = $("#anyo").val() + '-' + $("#mes").val() + '-' + $("#dia").val();
	$("#fnacimiento").val($campot);


});
	/*$campo1 = $("input#username").val();
	$campo2 = $("input#email").val();
	$campo3 = $("input#nacimiento").val();*/

  $("input.textu").val('');  
 
});
  </script>

<h2>Usuarios ya registrados</h2>


<?php

//incloim les dades del svr
//User: grafikoh_regalam
//Database: grafikoh_regalame 
$host="localhost"; // Host name
$user="grafikoh_regalam"; // Mysql username
$pass="j9vcpPqY"; // Mysql password
$db_name="grafikoh_regalame"; // Database name
$tbl_name="usuario"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$user", "$pass")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// dades server

$sql2="SELECT * FROM $tbl_name";
$result=mysql_query($sql2);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="10"><strong>List data from mysql </strong> </td>
</tr>

<tr>
<td align="center"><strong>id_usuario</strong></td>
<td align="center"><strong>id_lista</strong></td>
<td align="center"><strong>nombre</strong></td>
<td align="center"><strong>mail</strong></td>
<td align="center"><strong>fnacimiento</strong></td>
<td align="center"><strong>sexo</strong></td>
<td align="center"><strong>password</strong></td>
<td align="center"><strong>fregistro</strong></td>
<td align="center"><strong>fultima_conexion</strong></td>
<td align="center"><strong>localidad</strong></td>


</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><? echo $rows['id_usuario']; ?></td>
<td><? echo $rows['id_lista']; ?></td>
<td><? echo $rows['nombre']; ?></td>
<td><? echo $rows['mail']; ?></td>
<td><? echo $rows['fnacimiento']; ?></td>
<td><? echo $rows['sexo']; ?></td>
<td><? echo $rows['password']; ?></td>
<td><? echo $rows['fregistro']; ?></td>
<td><? echo $rows['fultima_conexion']; ?></td>
<td><? echo $rows['localidad']; ?></td>

<!-- link to update.php and send value of id-->

</tr>
<?php
}
?>
</table>
</td>
</tr>
</table>
<?php
mysql_close();
?>

</body>

</html>