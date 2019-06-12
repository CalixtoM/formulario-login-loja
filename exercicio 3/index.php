<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Finalizar Compra</title>
</head>
<body>

<div id="topo">
	<center>
	<br>
	<h1>ÓTIMA ESCOLHA!</h1>
	<p>Por favor, confirme seus dados antes de finalizar a compra.</p>
	<br>
	</center>
</div>
<br><br>

<div id="lateral">
	<fieldset>
	<center>
	<h1>Sua Compra</h1>
		<img src="img/fifa.jpg">

	<h3>Produto</h3>
	<p>Fifa 19</p>
	<h3>Plataforma</h3>
	<p>Playstation</p>
	<h3>Tamanho</h3>
	<p>50GB</p>
	<h3>Preço</h3>
	<p>R$ 80,00</p>
	</center>
	</fieldset>
</div>

	<fieldset id="kkkk">
<div id="corpo1">
		<form name="dados" method="post" action="resposta.php"> 
			<h2>Dados Pessoais</h2>
				<p>Nome Completo</p>
					<input type="text" name="nn" placeholder="Jorge Amaral Cardoso" id="inp" required="">
				<p>Email</p>
					<input type="email" name="eml" placeholder="email@exemple.com" id="inp" required="">
				<p>CPF</p>
					<input type="number" name="cpff" placeholder="000.000.000-00" id="inp" maxlength="11" required="">
					<br><br>
					Quero receber promoções<input type="checkbox" name="lemb">	
</div>
<div id="corpo2"></div>
		<h2>Cartão de Crédito</h2>
			<p>Número - CVV</p>
				<input type="number" name="nmr" id="inp" maxlength="3" required="">
			<p>Bandeira</p>
				<select name="cartao" required="">
					<option value="Elo">Elo</option>
					<option value="Master">Master</option>
					<option value="Visa">Visa</option>	
				</select>	
			<p>Validade</p>
				<input type="date" name="vld" id="inp" required="">	
		
		<br><br><br><br>
				<input type="submit" name="Confirmar">	
		</form>
	</div>
</fieldset>			


</body>
</html>