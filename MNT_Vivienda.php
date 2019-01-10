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
        echo "ID de vivienda:";
        $viv = trim(fgets(STDIN));
	echo "Codigo de Complejo habitacional de vivienda:";
        $com = trim(fgets(STDIN)); // Codigo de complejo habitacional de vivienda
	echo "Codigo de estacionamiento de vivienda:";
        $est = trim(fgets(STDIN)); // Codigo de estacionamiento de vivienda
	echo "Codigo de bodega de vivienda:";
        $bod = trim(fgets(STDIN)); // Codigo de bodega de vivienda
        $query = "UPDATE vivienda 
                  SET VIV_COM='$com',
                      VIV_EST=$est,
                      VIV_BOD=$bod,
                  WHERE VIV_COD='$viv'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	echo "ID de vivienda:";
        $viv = trim(fgets(STDIN));
	echo "Codigo de Complejo habitacional de vivienda:";
        $com = trim(fgets(STDIN)); // Codigo de complejo habitacional de vivienda
	echo "Codigo de estacionamiento de vivienda:";
        $est = trim(fgets(STDIN)); // Codigo de estacionamiento de vivienda
	echo "Codigo de bodega de vivienda:";
        $bod = trim(fgets(STDIN)); // Codigo de bodega de vivienda
	$query = "INSERT INTO vivienda (VIV_COD,VIV_COM,VIV_EST,VIV_BOD,VIV_ESTADO)
	VALUES ('$viv','$com',$est,$bod,true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "ID de vivienda:";
        $viv = trim(fgets(STDIN));
        $query="UPDATE vivienda
                  SET VIV_ESTADO=0
                  WHERE VIV_COD='$viv'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
