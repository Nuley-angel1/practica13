<!DOCTYPE html>
<html>
<head>

    <title>Calculadora</title>
    <style type="text/css">
	.auto-style1 {
		margin-left: 116px;
		margin-top: 20px;
	}
	.auto-style2{
		margin-left:127px;
		
	}
	.auto-style3{
		margin-left: 127px;
		}
		</style>
	</head>
	<body>
		<div style="background-color:#812B4F; margin-left: 500px; width:400px">
			<form action="resultado.php" method="post">
				<select name="operador" class="auto-style1" style="widht: 169px">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
				</select><br />
				<p style="color:white; text-align:center">Valor 1:</p>
				<input type="text" name="valor1" class="auto-style2"><br>
				<p style="color:white; text-align:center">Valor 2:</p>
				<input type="text" name="valor2" class="auto-style2"><br>
				<br>
				<input type="submit" value="Calcular" class="auto-style3">
			</form>
		</div>
	</body>
</html>
</head>