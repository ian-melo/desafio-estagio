<?php
function calculadora($num1, $num2, $operador) {
	$res;
	switch($operador) {
		case "MAIS":
			$res = $num1 + $num2;
			break;
		case "MENOS":
			$res = $num1 - $num2;
			break;
		case "VEZES":
			$res = $num1 * $num2;
			break;
		case "DIVIDIDO":
			$res = $num1 / $num2;
			break;
	}
	return $res;
}

$resultado = "";
if( isset($_POST["num1"]) && $_POST["num1"] != "" &&
	isset($_POST["num2"]) && $_POST["num2"] != "" &&
	isset($_POST["operador"]) && isset($_POST["calcular"]) ) {
	$resultado = calculadora($_POST["num1"],$_POST["num2"],$_POST["operador"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Desafio 2</title>
</head>
<body>
<center>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div style="margin: 0 auto; width: 250px;"><fieldset>
	<legend>Calculadora</legend>
	<input type="text" name="num1" size="5" placeholder="número 1" <?php if(isset($_POST["num1"])) echo 'value="'.$_POST["num1"].'"'; ?> />&nbsp;&nbsp;
	<select name="operador">
		<option value="MAIS" <?php if(isset($_POST["operador"]) && $_POST["operador"] == "MAIS") echo "selected"; ?> />+</option>
		<option value="MENOS" <?php if(isset($_POST["operador"]) && $_POST["operador"] == "MENOS") echo "selected"; ?> />-</option>
		<option value="VEZES" <?php if(isset($_POST["operador"]) && $_POST["operador"] == "VEZES") echo "selected"; ?> />x</option>
		<option value="DIVIDIDO" <?php if(isset($_POST["operador"]) && $_POST["operador"] == "DIVIDIDO") echo "selected"; ?> />:</option>
	</select>&nbsp;&nbsp;
	<input type="text" name="num2" size="5" placeholder="número 2" <?php if(isset($_POST["num2"])) echo 'value="'.$_POST["num2"].'"'; ?> /><br/><br/>
	<input type="submit" name="calcular" value="Calcular >>"/>&nbsp;&nbsp;<input type="text" size="5" value="<?php echo "$resultado"; ?>"/>
</fieldset></div>
</form>

</center>
</body>
</html>