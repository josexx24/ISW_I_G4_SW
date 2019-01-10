
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
        echo "ID de Complejo Habitacional:";
        $com = trim(fgets(STDIN)); //ID de Complejo Habitacional
	echo "Nombre de Complejo Habitacional:";
        $nom = trim(fgets(STDIN)); // Nombre de Complejo Habitacional
	echo "Tipo de Complejo Habitacional:";
        $tip = trim(fgets(STDIN)); // Tipo de Complejo Habitacional
	echo "Direccion de Complejo Habitacional:";
        $dir = trim(fgets(STDIN)); // Direccion de Complejo Habitacional
        $query = "UPDATE complejo_habiatacional 
                  SET COM_NOM='$nom',
		      COM_TIPO='$tip',
		      COM_DIR='$dir'
                  WHERE COM_ID='$com'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	echo "ID de Complejo Habitacional:";
        $com = trim(fgets(STDIN)); //ID de Complejo Habitacional
	echo "Nombre de Complejo Habitacional:";
        $nom = trim(fgets(STDIN)); // Nombre de Complejo Habitacional
	echo "Tipo de Complejo Habitacional:";
        $tip = trim(fgets(STDIN)); // Tipo de Complejo Habitacional
	echo "Direccion de Complejo Habitacional:";
        $dir = trim(fgets(STDIN)); // Direccion de Complejo Habitacional
	$query = "INSERT INTO complejo_habiatacional (COM_ID,COM_NOM,COM_TIPO,COM_DIR,COM_ESTADO)
	VALUES ('$com','$nom','$tip','$dir',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "ID de Complejo Habitacional:";
        $com = trim(fgets(STDIN)); //ID de Complejo Habitacional
        $query="UPDATE complejo_habiatacional
                  SET COM_ESTADO=0
                  WHERE COM_ID='$com'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
