<?php
$servername = "127.0.0.1";
$username = "josexx24";
$password ="majora20";
$dbname = "cerberus";

// Create connection
$conn = mysqli_connect($servername, $username,$password,  $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $opcion=$_POST['opcion'];
 if($opcion=='A')
 {
        echo "Actualizar la base de datos\n";
        echo "ID de bodega:";
        $bod=(int)$_POST['bod'];
	echo "Codigo de Bodega:";
        $cod = $_POST['cod']; // Codigo de bodega
        $query = /** @lang text */
            "UPDATE bodega 
                  SET BOD_COD='$cod'
                  WHERE BOD_ID=$bod";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
	 echo "Codigo de Bodega:";
	 $cod = $_POST['cod']; // Codigo de bodega
	$query = /** @lang text */
        "INSERT INTO bodega (BOD_COD,BOD_ESTADO)
	VALUES ('$cod',true)";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	echo "ID de bodega:";
        $bod=(int)$_POST['bod'];
        $query= /** @lang text */
            "UPDATE bodega 
                  SET BOD_ESTADO=0
                  WHERE BOD_ID=$bod ";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
