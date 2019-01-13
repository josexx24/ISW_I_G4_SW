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
        // "Rut de Propietario:"
        $pro = $_POST['pro'];
	// "Nombre de propietario:"
        $nom = $_POST['nom'];; // Nombre de propietario
	// "Apellido paterno de propietario:"
        $ape1 = $_POST['ape1'];; // Apellido paterno de propietario
	// "Apellido materno de propietario:"
        $ape2 = $_POST['ape2'];; // Apellido paterno de propietario
	// "Fecha:(Formato day-month-year)"
	$dat = $_POST['dat'];;// Fecha
	// "Telefono:(Formato (569)xxxx)"
	$tel = $_POST['tel'];;// Telefono
	// "Email:"
	$email = $_POST['email'];;// Email
        $query = "UPDATE propietario 
                  SET PRO_NOM='$nom',
                      PRO_APE1='$ape1',
                      PRO_APE2='$ape2',
                      PRO_INI= '$dat',
                      PRO_TEL='$tel',
                      PRO_EMAIL='$email'
                  WHERE PRO_RUT='$pro'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	// "Rut de Propietario:"
        $pro = $_POST['pro'];
	// "Nombre de propietario:"
        $nom = $_POST['nom'];; // Nombre de propietario
	// "Apellido paterno de propietario:"
        $ape1 = $_POST['ape1'];; // Apellido paterno de propietario
	// "Apellido materno de propietario:"
        $ape2 = $_POST['ape2'];; // Apellido paterno de propietario
	// "Fecha:(Formato day-month-year)"
	$dat = $_POST['dat'];;// Fecha
	// "Telefono:(Formato (569)xxxx)"
	$tel = $_POST['tel'];;// Telefono
	// "Email:"
	$email = $_POST['email'];;// Email
	$query = "INSERT INTO propietario (PRO_RUT,PRO_NOM,PRO_APE1,PRO_APE2,PRO_INI
 		  ,PRO_TEL,PRO_EMAIL,PRO_ESTADO)
	VALUES ('$pro','$nom','$ape1','$ape2','$dat','$tel','$email',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	// "Rut de Propietario:"
        $pro = $_POST['pro'];;
        $query="UPDATE propietario
                  SET PRO_ESTADO=0
                  WHERE PRO_RUT='$pro'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
