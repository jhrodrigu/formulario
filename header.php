<body>
<h1 class="text-themecolor m-b-0 m-t-0"><b>Formulario</b></h1>
  <div class="card">
    <div class="fotmulario">
            <div class="">
                <form method="post" id="formu">
                    <div class=" mb-3 ">
                        <label for="exampleInputEmail1 " class="form-label">Nombre Equipo:</label>
                        <input type="text " class="form-control " name="nombre">
                        <div id="emailHelp " class="form-text "></div>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1 " class="form-label">Grupo:</label>
                        <input type="text " class="form-control " name="grupo">
                        <div id="emailHelp " class="form-text "></div>
                    </div>
                    <br>
                    <button type="submit" id="enviar" class="btn btn-primary">ENVIAR</button>
                </form>
                <hr>
            </div>

        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre Equipo</th>
                        <th scope="col">Grupo</th>
                    </tr>
                </thead>
                <tbody>

<?php 

include ("conexion.php");

$consulta = ("SELECT * FROM productos");
$result = mysqli_query($conn,$consulta);

if($result === false){
    
}

while($mostrar = mysqli_fetch_array($result)){

?>

                    <tr>
                        <th scope="row"> <?php echo $mostrar['id'] ?> </th>
                        <td><?php echo $mostrar['nombre_equipo'] ?></td>
                        <td><?php echo $mostrar['grupo'] ?></td>
                    </tr>

<?php 
}
?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="main.js "></script>
</body>

</div> 
</body>

