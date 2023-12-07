<?php
$id_recibido=$_GET['id'];
$nom_recibido=$_GET['nom'];
$tip_recibido=$_GET['tip'];
echo $id_recibido."-".$nom_recibido."-".$tip_recibido;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modificar2.php" method="POST">
        <input type="text" name="id" value="<?php echo $id_recibido?>"></input>
        <input type="text" name="nv" value="<?php echo $nom_recibido?>"></input>
        <input type="text" name="tv" value="<?php echo $tip_recibido?>"></input>
        <input type="submit"></input>
    </form>
</body>
</html>