<html>
<head>
<title align="center">Muestra de datos</title> 
</head>
<body bgcolor="blue">
<h1>Estos son los datos enviados:</h1>
<?php
echo "Su Nombre : "; echo $_POST['nombre']; echo "<br/>";
echo "Texto Escrito: "; echo $_POST['textArea']; echo "<br/>";
echo "Comida Elegida: "; echo $_POST['Comida']; echo "<br/>";
echo "Tipo de pelicula preferida: "; echo $_POST['Accion']; echo "<br/>";
echo "Deporte preferido: "; echo $_POST['Basketball']; echo "<br/>";
echo "Rango de edad entre: "; echo $_POST['edad']; echo "<br/>";

?>
</body>
</html>