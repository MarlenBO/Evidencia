<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
    <meta charset="utf-8" />
    <style type="text/css"></style>
</head>
<body>
    
<?php
$con = mysqli_connect("localhost", "root", "", "enterprise");
$Clientes = $_POST['id'];
$resultado = mysqli_query($con, "SELECT * FROM clientes where id Cliente = $Clientes"); 
if ($resultado === FALSE) {
echo "Fallo";
die(mysqli_error());
}
echo"<center>";
echo "<form action='Actualizar3_Datos.php' method='POST'>";
echo "<h1>Editar Datos</h1>";
echo "<table border='1'>";
while($row = mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td>ID Cliente:</td>"; echo "<td><input type='text' name='id cliente' value=".$row['id cliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Nombre:</td>"; echo "<td><input type='text' name='nombre cliente' value=".$row['nombre cliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Dirección:</td>"; echo "<td><input type='text' name='direccion cliente' value=".$row['direccion cliente']."></td></tr>"; 
    echo "<tr>";
    echo "<td>Teléfono:</td>"; echo "<td><input type='text' name='telefono cliente' value=".$row['telefono cliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Correo Electrónico:</td>"; echo "<td><input type='text' name='email cliente' value=".$row['email cliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Fecha de registro:</td>"; echo "<td><input type='text' name='fecha registro' value=".$row['fecha registro']."></td></tr>";
    echo "<tr>";
    echo "<td>Ciudad:</td>"; echo "<td><input type='text' name='ciudad cliente' value=".$row['ciudad cliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Pais:</td>"; echo "<td><input type='text' name='pais cliente' value=".$row['pais cliente']."></td></tr>";
};
echo "</table>";
mysqli_close($con);
echo "<input type='submit' value='actualizar_datos'>";
echo "</form";
?>
</body>
</html>
