<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renta de autos";


$id_recibido2=$_POST['id'];
$nom_recibido2=$_POST['nv'];
$tip_recibido2=$_POST['tv'];
echo $id_recibido2."-".$nom_recibido2."-".$tip_recibido2;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE velas SET nombre='".$nom_recibido2."', tipo='".$tip_recibido2."' WHERE id=".$id_recibido2;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>