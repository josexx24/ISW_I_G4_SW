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
        echo "Cod de espacio recreativo:";
        $esp_rec = trim(fgets(STDIN));
	echo "Nombre de espacio recreativo:";
        $nom = trim(fgets(STDIN)); // Nombre de espacio recreativo
	echo "Capacidad de espacio recreativo:";
        fscanf(STDIN,"%d\n",$cap); // Capacidad de espacio recreativo
        $query = "UPDATE esp_recreativo 
                  SET ESP_NOM='$com',
                      ESP_CAP=$est,
                  WHERE ESP_COD='$esp_rec'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	echo "Cod de espacio recreativo:";
        $esp_rec = trim(fgets(STDIN));
	echo "Nombre de espacio recreativo:";
        $nom = trim(fgets(STDIN)); // nombre de espacio recreativo
	echo "Capacidad de espacio recreativo:";
        fscanf(STDIN,"%d\n",$cap); // Capacidad de espacio recreativo
	$query = "INSERT INTO esp_recreativo (ESP_COD,ESP_NOM,ESP_CAP,ESP_ESTADO)
	VALUES ('$esp_rec','$nom',$cap,true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "Cod de espacio recreativo:";
        $esp_rec = trim(fgets(STDIN));
        $query="UPDATE esp_recreativo
                  SET ESP_ESTADO=0
                  WHERE ESP_COD='$esp_rec'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
