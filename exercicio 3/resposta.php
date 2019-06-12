<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	
	div{
		background-color: lightblue;
		width: 700px;
		border-radius: 5px;
		font-family: arial;
	}

</style>

	<title></title>
</head>
<body>

<center>
<div>
<?php
	
		echo "<br>";
	
	echo "<h1>Compra Efetuada</h1>";
	
		echo "<br>";

	echo "Nome Completo: ";
	echo $_POST['nn'];

		echo "<br>";

	echo "Email: ";
	echo $_POST['eml'];

		echo "<br>";

	echo "CPF: ";
	echo $_POST['cpff'];

		echo "<br>";

	echo "Numero: ";
	echo $_POST['nmr'];

	echo "<br>";

	if (isset($_POST['cartao'])) {
	$cartao = $_POST['cartao'];
	echo "Cartao: $cartao";
	}	

		echo "<br>";

	echo "Validade: ";
	echo $_POST['vld'];

		echo "<br>";
		echo "<br>";


?>
</div>
</center>


</body>
</html>