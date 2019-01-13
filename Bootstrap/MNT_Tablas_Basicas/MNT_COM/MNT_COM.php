
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
        // "ID de Complejo Habitacional:"
        $com = $_POST['com']; //ID de Complejo Habitacional
	// "Nombre de Complejo Habitacional:"
        $nom = $_POST['nom']; // Nombre de Complejo Habitacional
	// "Tipo de Complejo Habitacional:"
        $tip = $_POST['tip']; // Tipo de Complejo Habitacional
	// "Direccion de Complejo Habitacional:"
        $dir = $_POST['dir']; // Direccion de Complejo Habitacional
        $query = "UPDATE complejo_habiatacional 
                  SET COM_NOM='$nom',
		      COM_TIPO='$tip',
		      COM_DIR='$dir'
                  WHERE COM_ID='$com'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	// "ID de Complejo Habitacional:"
        $com = $_POST['com']; //ID de Complejo Habitacional
	// "Nombre de Complejo Habitacional:"
        $nom = $_POST['nom']; // Nombre de Complejo Habitacional
	// "Tipo de Complejo Habitacional:"
        $tip = $_POST['tip']; // Tipo de Complejo Habitacional
	// "Direccion de Complejo Habitacional:"
        $dir = $_POST['dir']; // Direccion de Complejo Habitacional
	$query = "INSERT INTO complejo_habiatacional (COM_ID,COM_NOM,COM_TIPO,COM_DIR,COM_ESTADO)
	VALUES ('$com','$nom','$tip','$dir',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	// "ID de Complejo Habitacional:"
        $com = $_POST['com']; //ID de Complejo Habitacional
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
