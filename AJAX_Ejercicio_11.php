<?php

if(isset($_POST["par1"]) && isset($_POST["par2"]) && isset($_POST["op"]))
{
	require "Funciones_Ejercicio_11";

	$par1 = $_POST["par1"];
	$par2 = $_POST["par2"];
	$op = trim($_POST["op"]);
	if(!is_numeric($par1) || !is_numeric($par2)) 
	{
		$resultado = "Ingrese Números";
	} 
	else 
	{
		$par1 = intval($par1, 10);
		$par2 = intval($par2, 10);
		switch ($op)
		{
			case "+": $resultado = sumar($par1, $par2); break;
			case "-": $resultado = restar($par1, $par2); break;
			case "*": $resultado = multiplicar($par1, $par2); break;
			case "/":
				if($par2 != 0) {
					$resultado = dividir($par1, $par2); 
				} else {
					$resultado = "Err. Div. Cero";
				}
				break;
			default: $resultado = "Seleccione Operación";
		}
	}
	
	/*Genera respuesta en JSON*/
	echo json_encode($resultado);
	
	exit();
}

?>
<html>
<head>

<style>
	.centrar
	{
		position: absolute;
		/*nos posicionamos en el centro del navegador*/
		top:50%;
		left:50%;
		/*determinamos una anchura*/
		width:400px;
		/*indicamos que el margen izquierdo, es la mitad de la anchura*/
		margin-left:-200px;
		/*determinamos una altura*/
		height:300px;
		/*indicamos que el margen superior, es la mitad de la altura*/
		margin-top:-150px;
		border:1px solid #808080;
		padding:5px;
	}
	</style>



	<title>Calculadora</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="jquery-1.4.2.js"></script>
  	<script src="json2.js"></script>
  	<script type="text/javascript">
		function CalcularTotal()
		{
			var par1 = $("#par1").val();
			var par2 = $("#par2").val();
			var op = $("#op").val();
			
			/*Solicitamos el resultado con AJAX según el método POST*/
			/*como parámetro (por POST) se envía el par1, par2 y op.*/
			$.post("calculadora.php", {par1: par1, par2: par2, op: op}, function(resultado){
				$("#res").val(resultado);
			}, "json"); /*El parámetro "json" indica que la respuesta desde PHP es en formato JSON*/
		}	
  	</script>
</head>
<body style="background-color:lightblue;">

<div>
<div class='centrar'>
  <h3 align="center">CALCULADORA</h3>
  <form action="calculadora.php" method="POST">
    <table border="1" align="center"  width="300px" cellpadding="4">	
    <tr>		
		<td align="center"><b>Numero 1:</b></td>
		<td>
			<input type="text" name="par1" align="center" id="par1" size="10">
		</td>
    </tr>
    <tr>		
		<td align="center"><b>Numero 2:</b></td>
		<td>
			<input type="text" name="par2" id="par2" size="10">
		</td>
    </tr>
    <tr>		
		<td align="center"><b>Operador:</b></td>
		<td>
			<input type="text" name="op" id="op" size="5">
		</td>
    </tr>
    <tr>		
		<td colspan="2" align="center">
		  <input type="button" name="enviar" value="Resultado" onclick="CalcularTotal();">
		</td>
    </tr>
    <tr>
		<td colspan="2" align="center">
		  <input type="text" name="res" id="res" size="15">
		</td>
    </tr>
    </table>
</div>
  </form>
</body>
</html>