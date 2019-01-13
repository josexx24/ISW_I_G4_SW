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
        // "ID de vivienda:"
        $viv = $_POST['viv'];
	// "Codigo de Complejo habitacional de vivienda:"
        $com = $_POST['com']; // Codigo de complejo habitacional de vivienda
	// "Codigo de estacionamiento de vivienda:"
        $est = (int)$_POST['est']; // Codigo de estacionamiento de vivienda
	// "Codigo de bodega de vivienda:"
        $bod = (int)$_POST['bod']; // Codigo de bodega de vivienda
        $query = "UPDATE vivienda 
                  SET VIV_COM='$com',
                      VIV_EST=$est,
                      VIV_BOD=$bod
                  WHERE VIV_COD='$viv'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	// "ID de vivienda:"
        $viv = $_POST['viv'];
	// "Codigo de Complejo habitacional de vivienda:"
        $com = $_POST['com']; // Codigo de complejo habitacional de vivienda
	// "Codigo de estacionamiento de vivienda:"
        $est = (int)$_POST['est']; // Codigo de estacionamiento de vivienda
	// "Codigo de bodega de vivienda:"
        $bod = (int)$_POST['bod']; // Codigo de bodega de vivienda
	$query = "INSERT INTO vivienda (VIV_COD,VIV_COM,VIV_EST,VIV_BOD,VIV_ESTADO)
	VALUES ('$viv','$com',$est,$bod,true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	// "ID de vivienda:"
        $viv = $_POST['viv'];
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
