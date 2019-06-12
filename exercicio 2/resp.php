<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
	
		body{
			background-color: lightblue;
		}


		</style>
	<title></title>
</head>
<body>	

<center>

<?php

		if($_POST['login'] == 'matheus'){
			echo "Usuario identificado";		
		}
		else{
			echo "usuario não identificado";
		}
?>

		<br><br>

<?php
		if ($_POST['senha'] == '123'){
			echo "Senha Correta";
		}

		else{
			echo "senha Incorreta";
		}
?>
</center>

</body>
</html>