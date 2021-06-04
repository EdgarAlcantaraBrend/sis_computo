<?php



    $conexion= mysqli_connect("localhost","root","","sistema_computo");
    
    $nombreE = $_POST['nombreE'];
    $modelo = $_POST['modelo'];
    $numero = $_POST['numero'];
    $imagen = $_POST['imagen'];
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $tel= $_POST['tel'];

    $sql= "INSERT into t_registros(nombre_equipo, modelo,numero,imagen,fecha,nombre,apellido,email,tel)
                        values ('$nombreE', '$modelo','$numero','$imagen','$fecha','$nombre','$apellido','$email','$tel')";

    $ejecutado = mysqli_query($conexion,$sql);

    if ($ejecutado) {
        $campos= mysqli_insert_id($conexion);
        
    }else{
        echo "Error";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mostrar Datos</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body style="background-color: violet;">
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-hover table-condensed" id="tablaContactosDT" border="10">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre Equipo</th>
                                        <th>Modelo</th>
                                        <th>Numero de serie</th>
                                        <th>Imagen</th>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Opcion 1</th>
                                        <th>Opcion 2</th>
                                        <th>Opcion 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        
                                        $sql ="SELECT * from t_registros";
                                        $result=mysqli_query($conexion,$sql);
                                        while($mostrar = mysqli_fetch_array($result)) {  
                                            
                                    ?>
                                    <tr>
                                        <td><?php echo $mostrar['id'] ?></td>
                                        <td><?php echo $mostrar['nombre_equipo'] ?></td>
                                        <td><?php echo $mostrar['modelo'] ?></td>
                                        <td><?php echo $mostrar['numero'] ?></td>
                                        <td><?php echo $mostrar['imagen'] ?></td>
                                        <td><?php echo $mostrar['fecha'] ?></td>
                                        <td><?php echo $mostrar['nombre'] ?></td>
                                        <td><?php echo $mostrar['apellido'] ?></td>
                                        <td><?php echo $mostrar['email'] ?></td>
                                        <td><?php echo $mostrar['tel'] ?></td>
                                        <td><a href="editar.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
                                        <td><a href="eliminar.php" class="btn">Eliminar</a></td>
                                        <td><a href="index.php" class="btn">Agregar</a></td>
                                        
                                    </tr>
                                <?php } ?></tbody>
                            </table>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
