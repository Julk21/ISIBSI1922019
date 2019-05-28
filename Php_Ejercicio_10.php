<!-- Escriba el código necesario para mostrar en una página web un formulario con al menos los siguientes tipos de campos:
• Un campo de texto plano
• Un área de texto de 3 líneas
• Un campo de selección
• Un campo de tipo check
• Un grupo de campos radiales
• Un botón
• Un campo de tipo rango
Adicionalmente, el action del formulario debe llevar a una página PHP que reciba los datos por post y muestre en pantalla
los pared Campo = Valor.-->

<html>
<head>
<title>Ejercicio 10</title>

</head>

<body bgcolor="green">

<P> <h1>Ejercicio usando PHP</h1> </p>

<form action="Form Ejercicio 10.php" method="post">
<p>Nombre: <input type="text" name="nombre" /></p>:

<textarea name="textArea" rows="3" cols="9" wrap="soft"> Puede ingresar cualquier texto</textarea> <br/> <br/>

Escoja una comida: <select name="Comida">

<option> Hamburguesa</option>

<option> Pizza</option>

<option> Tacos</option>

</select> <br> <br>


 Que tipo de peliculas prefiere?:<br>

    <label><input type="checkbox" name="Accion" value="Accion">Accion </label><br>

    <label><input type="checkbox" name="Accion" value="Terror" checked> Terror </label><br>

    <label><input type="checkbox" name="Accion" value="Comedia">Comedia </label> <br> <br>

Deporte Favorito:<br>

<input type="radio" name="Basketball" value="Basketball">Basketball <br>

<input type="radio" name="Basketball" value="Futbol"checked> Futbol <br>

<input type="radio" name="Basketball" value="Baseball">Bsseball <br> <br>


Seleccione un rango de edad:<br>

Rango de edad: <input type="range" name="edad" min="0" max="99" step="10">


<p><input type="submit" value="Enviar" /> </p>
</form>





</body>