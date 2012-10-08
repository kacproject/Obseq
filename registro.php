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
	    <script src="js/funcions.js" type="text/javascript"></script>
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
					<input class="password_adv textu" name="password_again" type="password" id="password_again" />
					
					<label for="mail">E-Mail</label>
					<input class="textu" name="mail" type="text" id="mail" />
					
					<label for="localidad">Localidad</label>
					<select name="localidad" id="localidad">
<option value="15">A coruña</option>
<option value="1">Álava</option>
<option value="2">Albacete</option>
<option value="3">Alicante</option>
<option value="4">Almería</option>
<option value="33">Asturias</option>
<option value="5">Ávila</option>
<option value="6">Badajoz</option>
<option value="7">Baleares</option>
<option value="8">Barcelona</option>
<option value="9">Burgos</option>
<option value="10">Cáceres</option>
<option value="11">Cádiz</option>
<option value="39">Cantabria</option>
<option value="12">Castellón</option>
<option value="51">Ceuta</option>
<option value="13">Ciudad Real</option>
<option value="14">Córdoba</option>
<option value="16">Cuenca</option>
<option value="99">Extranjero</option>
<option value="17">Girona</option>
<option value="18">Granada</option>
<option value="19">Guadalajara</option>
<option value="20">Guipúzcoa</option>
<option value="21">Huelva</option>
<option value="22">Huesca</option>
<option value="23">Jaén</option>
<option value="26">La rioja</option>
<option value="35">Las palmas</option>
<option value="24">León</option>
<option value="25">Lleida</option>
<option value="27">Lugo</option>
<option value="28">Madrid</option>
<option value="29">Málaga</option>
<option value="52">Melilla</option>
<option value="30">Murcia</option>
<option value="31">Navarra</option>
<option value="32">Ourense</option>
<option value="34">Palencia</option>
<option value="36">Pontevedra</option>
<option value="37">Salamanca</option>
<option value="38">Santa cruz de tenerife</option>
<option value="40">Segovia</option>
<option value="41">Sevilla</option>
<option value="42">Soria</option>
<option value="43">Tarragona</option>
<option value="44">Teruel</option>
<option value="45">Toledo</option>
<option value="46">Valencia</option>
<option value="47">Valladolid</option>
<option value="48">Vizcaya</option>
<option value="49">Zamora</option>
<option value="50">Zaragoza</option>
	                </select>

					<input class="textu" name="fnacimiento" type="hidden" id="fnacimiento" value="" />
					<input class="textu" name="sexos" type="hidden" id="sexos" />

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
  

  
	$("input.textu").val('');
	
	$('.birthday').change(function() {
	$campot = $("#anyo").val() + '-' + $("#mes").val() + '-' + $("#dia").val();
	$("#fnacimiento").val($campot);


});
$("#registre").validate({
            rules:{
                nombre: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 2
                },
                password_again: {
                    required: true,
                    minlength: 2,
                    equalTo: "#password"
                },
                sexo: {
                    required: true
                },
                localidad: {
                    required: true                },
                mail: {
                    required: true,
                    minlength: 6,
                    email: true
                }
            },
            messages: {
                nombre: {
                    required: "Introduce un nombre",
                    minlength: "Mínimo 2 caracteres"
                },
                password: {
                    required: "Introduce un password"
                },
                sexo: {
                    required: "Selecciona el tipo de sexo al que perteneces"
                },
                localidad: {
                    required: "Selecciona tu localidad"
                },
                mail: {
                    required: "Proporciona un correo electrónico",
                    minlength: "Mínimo 6 caracteres",
                    email: "No válido"
                }
            }
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