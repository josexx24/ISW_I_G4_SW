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
        // "Cod de Observacion:"
        $obs = $_POST['obs'];
        // "Fecha y hora de observacion:"
        $fec_hor = $_POST['fec_hor'];
	    // "Rut de empleado que hizo observacion:"
        $emp = $_POST['emp'];
    // "Descripcion de observacion"
        $des = $_POST['des'];
     // "Vivienda Visitada:"
        $viv = $_POST['viv']; 
     // "Propietario de vivienda visitada:"
        $pro = $_POST['pro']; 
        $query = "UPDATE observacion 
                  SET OBS_FEC_HOR='$fec_hor',
                      OBS_EMP='$emp',
                      OBS_DES='$des',
                      OBS_VIV='$viv',
                      OBS_PRO='$pro'
                  WHERE OBS_COD='$obs'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
        // "Fecha y hora de observacion:"
        $fec_hor = $_POST['fec_hor'];
	    // "Rut de empleado que hizo observacion:"
        $emp = $_POST['emp'];
    // "Descripcion de observacion"
        $des = $_POST['des'];
     // "Vivienda Visitada:"
        $viv = $_POST['viv']; 
     // "Propietario de vivienda visitada:"
        $pro = $_POST['pro']; 
	$query = "INSERT INTO observacion (OBS_FEC_HOR,OBS_EMP,OBS_DES,OBS_VIV,OBS_PRO)
	VALUES ('$fec_hor','$emp','$des','$viv','$pro')";
 }
 else
{
        echo "Eliminar en la base de datos\n";
        // "Cod de Observacion:"
        $obs = $_POST['obs'];
        $query="DELETE FROM observacion WHERE OBS_COD='$obs'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
