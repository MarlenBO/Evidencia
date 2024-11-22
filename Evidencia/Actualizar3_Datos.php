<?php
$con = mysqli_connect("localhost", "root", "", "enterprise");
if (!$con) {
    die('No se estableció la conexión con el servidor:'.mysqli_error($con)); 
};
$ID=$_POST['idCliente'];
$Nombre = $_POST['nombreCliente'];
$Direccion = $_POST['dirección'];
$Telefono = $_POST['teléfono'];
$Correo = $_POST['correoElectrónico'];

mysqli_query($con, "UPDATE clientes 
            SET id cliente='$ID',nombre cliente= '$Nombre',dirección cliente= '$Direccion',telefono cliente= '$Telefono',email cliente= '$Correo' , fecha  registro='$registro', ciudad cliente='$ciudad', pais cliente='$pais'
            WHERE idCliente = '$ID'");
header("Location:Actualizar_Datos.php");
mysqli_close($con);
?>