<?php 

$servidor = "localhost";
$user = "root";
$pass = "";



    try {

      $conexion = new PDO("mysql:host=$servidor;dbname=inventarios", $user, $pass);
      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Conexion realizada satisfactoriamente";

    } catch (PDOException $e) {
      echo "La conexion ha fallado: ".$e->getMessage();
    }

    $conn = mysqli_connect($servidor,$user,$pass);

    

    $nombre_equipo = $_POST['nombre'];
    $grupo = $_POST['grupo'];
    
    $sql = "INSERT INTO productos (nombre_equipo, grupo) VALUES ('$nombre_equipo','$grupo')";
    echo mysqli_query($conn,$sql);