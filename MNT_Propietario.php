<?php
$servername = "localhost";
$username = "josexx24";
$password = "majora20";
$dbname = "Cerberus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 var_dump($argc);
 var_dump($argv);
 echo "Numero de Argumentos:",$argc," Arreglo:",$argv[1],"\n";
 //echo "Menu:\n\t","A-Actualizar en Base de datos\n\t","I-Inserta en Base de datos\n\t",
//"E-Eliminar en Base de datos\n";
 $opcion=$argv[1];
if($opcion=='A')
 {
        echo "Actualizar la base de datos\n";
        echo "Rut de Propietario:";
        $pro = trim(fgets(STDIN));
	echo "Nombre de propietario:";
        $nom = trim(fgets(STDIN)); // Nombre de propietario
	echo "Apellido paterno de propietario:";
        $ape1 = trim(fgets(STDIN)); // Apellido paterno de propietario
	echo "Apellido materno de propietario:";
        $ape2 = trim(fgets(STDIN)); // Apellido paterno de propietario
	echo "Fecha:(Formato day-month-year)";
	$dat = trim(fgets(STDIN));// Fecha
	echo "Telefono:(Formato (569)xxxx)";
	$tel = trim(fgets(STDIN));// Telefono
	echo "Email:";
	$email = trim(fgets(STDIN));// Email
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
	echo "Rut de Propietario:";
        $pro = trim(fgets(STDIN));
	echo "Nombre de propietario:";
        $nom = trim(fgets(STDIN)); // Nombre de propietario
	echo "Apellido paterno de propietario:";
        $ape1 = trim(fgets(STDIN)); // Apellido paterno de propietario
	echo "Apellido materno de propietario:";
        $ape2 = trim(fgets(STDIN)); // Apellido paterno de propietario
	echo "Fecha:(Formato year-month-day)";
	$dat = trim(fgets(STDIN));// Fecha
	echo "Telefono:(Formato (569)xxxx)";
	$tel = trim(fgets(STDIN));// Telefono
	echo "Email:";
	$email = trim(fgets(STDIN));// Email
	$query = "INSERT INTO propietario (PRO_RUT,PRO_NOM,PRO_APE1,PRO_APE2,PRO_INI
 		  ,PRO_TEL,PRO_EMAIL,PRO_ESTADO)
	VALUES ('$pro','$nom','$ape1','$ape2','$dat','$tel','$email',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "Rut de Propietario:";
        $pro = trim(fgets(STDIN));
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
