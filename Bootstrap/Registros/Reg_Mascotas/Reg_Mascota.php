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
        // "Codigo de Mascota:"
        $mas = $_POST['mas'];
	// "Nombre de Mascota:"
        $nom = $_POST['nom'];
	// "Especie de Mascota:"
        $esp = (int)$_POST['esp'];
	// "Raza de Mascota:"
        $raz = (int)$_POST['raz']; 
    // "Residente dueño de Mascota:"
        $res = $_POST['res']; 
     // "Vivienda de Mascota:"
        $viv = $_POST['viv']; 
     // "Propietario de Vivienda de Mascota:"
        $pro = $_POST['pro']; 
        $query = "UPDATE mascota 
                  SET MAS_NOM='$nom',
                      MAS_ESP=$esp,
                      MAS_RAZA=$raz,
                      MAS_RES='$res',
                      MAS_VIV='$viv',
                      MAS_PRO='$pro'
                  WHERE MAS_COD='$mas'";
         
 }
 elseif($opcion=='I')
 {
        echo "Insertar en la base de datos\n";
        // "Codigo de Mascota:"
        $mas = $_POST['mas'];
	// "Nombre de Mascota:"
        $nom = $_POST['nom'];
	// "Especie de Mascota:"
        $esp = (int)$_POST['esp'];
	// "Raza de Mascota:"
        $raz = (int)$_POST['raz']; 
    // "Residente dueño de Mascota:"
        $res = $_POST['res']; 
     // "Vivienda de Mascota:"
        $viv = $_POST['viv']; 
     // "Propietario de Vivienda de Mascota:"
        $pro = $_POST['pro']; 
	$query = "INSERT INTO mascota (MAS_COD,MAS_NOM,MAS_ESP,MAS_RAZA,MAS_RES,MAS_VIV,MAS_PRO)
	VALUES ('$mas','$nom',$esp,$raz,'$res','$viv','$pro')";
 }
 else
{
        echo "Eliminar en la base de datos\n";
	// "ID de vivienda:"
        $mas = $_POST['mas'];
        $query="DELETE FROM mascota WHERE MAS_COD='$mas'";
}
echo "\n";
 if (!mysqli_query($conn,$query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for your review.\n";
    }

$conn->close();
?>
