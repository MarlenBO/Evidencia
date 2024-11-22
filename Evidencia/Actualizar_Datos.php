<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
    <meta charset="utf-8" />
<?php 
$con = mysqli_connect("localhost", "root", "", "enterprise"); // se crea la conexión al servidor 
$resultado = mysqli_query($con,"select *from clientes"); 
if($resultado === FALSE) {
echo "fallo ";
die(mysqli_error());
}
echo "<center>";
echo "<h1>Actualizar Datos</h1>";
echo "<table border='1'>
    <tr>
        <th>ID Cliente</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>fecha </th>
        <th>ciudad</th>
        Pais<th>p</th>
    </tr>";
    while($row = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$row['id cliente']."</td>";
        echo "<td>".$row['nombre cliente']."</td>";
        echo "<td>".$row['dirección cliente']."</td>";
        echo "<td>".$row['teléfono cliente']."</td>";
        echo "<td>".$row['email cliente']."</td>";
        echo "<td>".$row['fecha cliente']."</td>";
        echo "<td>".$row['ciudad cliente']."</td>";
        echo "<td>".$row['pais cliente']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    $registros = mysqli_num_rows($resultado);
    echo "El numero de registros son: ".$registros;
    mysqli_close($con)
    ?>
    <h3>Escribe el ID del registro a editar</h3>
    <form action="Actualizar2_Datos.php" method="post">
        ID Cliente <input type="number" name="id">
        <input type="submit" value="Editar">
    </form>