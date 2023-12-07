<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renta de autos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM velas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>tipo</th><th>modificar</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td> ".$row["tipo"]."</td>";
//    echo"<td>"."<p> <a href='http://localhost/proy/modificar.php?id=".$row['id'].  "'><img src='mod.png' alt='W3Schools.com' widt='38' height='38'></td></tr>";
    //echo"<td>"."<p> <a href='http://localhost/proy/modificar.php?id=".$row['id'].$row["nombre"].$row["tipo"]."'><img src='mod.png' alt='W3Schools.com' widt='38' height='38'></td></tr>";
    // echo"<td>"."<p> <a href='http://localhost/proy/modificar.php?id=".$row['id'].$row["nombre"].$row["tipo"]."'><img src='mod.png' alt='W3Schools.com' widt='38' height='38'></td></tr>";
    echo"<td>"."<p> <a href='http://localhost/proy/modificar.php?id=".$row['id']."&nom=".$row["nombre"]."&tip=".$row["tipo"]."'><img src='mod.png' alt='W3Schools.com' widt='38' height='38'></td></tr>";
  }


  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>