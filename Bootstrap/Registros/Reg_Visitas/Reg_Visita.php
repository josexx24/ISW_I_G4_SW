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
        // "Cod de Visita:"
        $vis = $_POST['vis'];
	// "Rut de Visita:"
        $rut = $_POST['rut'];
    // "Nombre de Visita"
        $nom = $_POST['nom'];
	// "Apellido Paterno de Residente:"
        $ape1 = $_POST['ape1'];
	// "Apellido Materno de Residente:"
        $ape2 =  $_POST['ape2']; 
    // "Fecha y hora de Visita:"
        $fec_hor = $_POST['fec_hor']; 
     // "Vivienda Visitada:"
        $viv = $_POST['viv']; 
     // "Propietario de vivienda visitada:"
        $pro = $_POST['pro']; 
        $query = "UPDATE visita 
                  SET VIS_NOM='$nom',
                      VIS_RUT='$rut',
                      VIS_APE1='$ape1',
                      VIS_APE2='$ape2',
                      VIS_FEC_HOR='$fec_hor',
                      VIS_VIV='$viv',
                      VIS_PRO='$pro'
                  WHERE VIS_COD='$vis'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	// "Rut de Visita:"
        $rut = $_POST['rut'];
    // "Nombre de Visita"
        $nom = $_POST['nom'];
	// "Apellido Paterno de Residente:"
        $ape1 = $_POST['ape1'];
	// "Apellido Materno de Residente:"
        $ape2 =  $_POST['ape2']; 
    // "Fecha y hora de Visita:"
        $fec_hor = $_POST['fec_hor']; 
     // "Vivienda Visitada:"
        $viv = $_POST['viv']; 
     // "Propietario de vivienda visitada:"
        $pro = $_POST['pro']; 
	$query = "INSERT INTO visita (VIS_RUT,VIS_NOM,VIS_APE1,VIS_APE2,VIS_FEC_HOR,VIS_VIV,VIS_PRO)
	VALUES ('$rut','$nom','$ape1','$ape2','$fec_hor','$viv','$pro')";
 }
 else
{
        echo "Eliminar en la base de datos\n";
        // "Cod de Visita:"
        $vis = $_POST['vis'];
        $query="DELETE FROM visita WHERE VIS_COD='$vis'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
