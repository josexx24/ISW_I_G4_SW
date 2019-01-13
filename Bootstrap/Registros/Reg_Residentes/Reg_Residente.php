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
        // "ID de Residente:"
        $res = $_POST['res'];
	// "Nombre de Residente:"
        $nom = $_POST['nom'];
	// "Apellido Paterno de Residente:"
        $ape1 = $_POST['ape1'];
	// "Apellido Materno de Residente:"
        $ape2 =  $_POST['ape2']; 
    // "Codigo de Vivienda de Residente:"
        $viv = $_POST['viv']; 
     // "Propietario de Vivienda de Residente:"
        $pro = $_POST['pro']; 
     // "Telefono de Residente:"
        $tel = $_POST['tel']; 
     // "Email de Residente:"
        $email = $_POST['email']; 
        $query = "UPDATE residente 
                  SET RES_NOM='$nom',
                      RES_APE1='$ape1',
                      RES_APE2='$ape2',
                      RES_VIV='$viv',
                      RES_PRO='$pro',
                      RES_TEL='$tel',
                      RES_EMAIL='$email'
                  WHERE RES_ID='$res'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
        // "ID de Residente:"
        $res = $_POST['res'];
	// "Nombre de Residente:"
        $nom = $_POST['nom'];
	// "Apellido Paterno de Residente:"
        $ape1 = $_POST['ape1'];
	// "Apellido Materno de Residente:"
        $ape2 =  $_POST['ape2']; 
    // "Codigo de Vivienda de Residente:"
        $viv = $_POST['viv']; 
     // "Propietario de Vivienda de Residente:"
        $pro = $_POST['pro']; 
     // "Telefono de Residente:"
        $tel = $_POST['tel']; 
     // "Email de Residente:"
        $email = $_POST['email']; 
	$query = "INSERT INTO residente (RES_ID,RES_NOM,RES_APE1,RES_APE2,RES_VIV,RES_PRO,RES_TEL,RES_EMAIL)
	VALUES ('$res','$nom','$ape1','$ape2','$viv','$pro','$tel','$email')";
 }
 else
{
        echo "Eliminar en la base de datos\n";
        // "ID de Residente:"
        $res = $_POST['res'];
        $query="DELETE FROM residente WHERE RES_ID='$res'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
