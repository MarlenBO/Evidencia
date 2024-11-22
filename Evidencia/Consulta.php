<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
        <center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "enterprise");
            $resultado = mysqli_query($con, "select * from clientes");
            if($resultado === FALSE){
                echo  "fallo";
                die(mysqli_error());
            }
            echo "<center><font face='Arial'>";
            echo "<a href='Consulta.php'>Actualizar Tabla</a>";
            echo "<h1>Consulta de la tabla Clientes</h1>";
            echo "<table border='1'>
            <tr>
            <th>id cliente</th>
            <th>Nombre Cliente</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha</th>
            <th>Ciudad</th>
            <th>Pais</th></tr>";
            while($row=mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td align=center >".$row['id cliente']."</td>";
                echo "<td>".$row['nombre cliente']."</td>";
                echo "<td>".$row['dirección cliente']."</td>";
                echo "<td>".$row['teléfono cliente']."</td>";
                echo "<td>".$row['email cliente']."</td>";
                echo "<td>".$row['fecha cliente']."</td>";
                echo "<td>".$row['ciudad cliente']."</td>";
                echo "<td align=center>".$row['pais cliente']."</td>";
                echo "</tr>";
            };
            echo"</table>";
            $registros=mysqli_num_rows($resultado);
            echo "<br>registros: ".$registros;
            mysqli_close($con);
            ?>
        </center>   
</body>
</html>