
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
        echo "ID de raza:";
        fscanf(STDIN,"%d\n",$raz);
	echo "Nombre de Raza:";
        $nom = trim(fgets(STDIN)); // Codigo de bodega
        $query = "UPDATE raza 
                  SET RAZA_NOM='$nom'
                  WHERE RAZA_ID=$raz";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	 echo "Nombre de raza:";
	 $nom = trim(fgets(STDIN)); // Codigo de bodega
	$query = "INSERT INTO raza (RAZA_NOM,RAZA_ESTADO)
	VALUES ('$nom',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "ID de bodega:";
        fscanf(STDIN,"%d\n",$raz);
        $query="UPDATE raza
                  SET RAZA_ESTADO=0
                  WHERE RAZA_ID=$raz";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
