
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
        echo "ID de Especie:";
        fscanf(STDIN,"%d\n",$esp);
	echo "Nombre de Especie:";
        $nom = trim(fgets(STDIN)); // Codigo de bodega
        $query = "UPDATE especie 
                  SET ESP_NOM='$nom'
                  WHERE ESP_ID=$esp";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	 echo "Nombre de Especie:";
	 $nom = trim(fgets(STDIN)); // Codigo de bodega
	$query = "INSERT INTO especie (ESP_NOM,ESP_ESTADO)
	VALUES ('$nom',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "ID de Especie:";
        fscanf(STDIN,"%d\n",$esp);
        $query="UPDATE especie
                  SET ESP_ESTADO=0
                  WHERE ESP_ID=$esp";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
