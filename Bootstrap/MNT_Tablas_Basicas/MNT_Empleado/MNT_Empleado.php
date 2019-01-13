<?php
$servername = "127.0.0.1";
$username = "josexx24";
$password = "majora20";
$dbname = "cerberus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$opcion=$_POST['opcion'];
if($opcion=='A')
 {
        echo "Actualizar la base de datos\n";
        // "ID de Empleado:"
        $emp = $_POST['emp'];
	    // "Nombre de Empleado:"
        $nom = $_POST['nom'];
	    // "Apellido Paterno:"
        $ape1 = $_POST['ape1'];
	    // "Apellido Materno:"
        $ape2 = $_POST['ape2'];
        // "Telefono:"
        $tel = $_POST['tel'];
        $query = "UPDATE empleado 
                  SET EMP_NOM='$com',
                      EMP_APE1='$ape1',
                      EMP_APE2='$ape2',
                      EMP_TEL='$tel'
                  WHERE EMP_ID='$emp'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
        // "ID de Empleado:"
        $emp = $_POST['emp'];
	    // "Nombre de Empleado:"
        $nom = $_POST['nom'];
	    // "Apellido Paterno:"
        $ape1 = $_POST['ape1'];
	    // "Apellido Materno:"
        $ape2 = $_POST['ape2'];
        // "Telefono:"
        $tel = $_POST['tel'];
        // "Tipo:"
        $tip = $_POST['tip'];
	$query = "INSERT INTO empleado (EMP_ID,EMP_NOM,EMP_APE1,EMP_APE2,EMP_TEL,EMP_TIP,EMP_ESTADO)
	VALUES ('$viv','$nom','$ape1','$ape2','$tel','$tip',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
        // "ID de Empleado:"
        $emp = $_POST['emp'];
        $query="UPDATE empleado
                  SET EMP_ESTADO=0
                  WHERE EMP_ID='$emp'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
