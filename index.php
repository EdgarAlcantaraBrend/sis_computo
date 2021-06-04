<!doctype html>
    <html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/estilo.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="background-color: #dca2a2;">
        
        <div class="jumbotron jumbotron-fluid" style="background-color: #eca3e5;">
            <div class="container ">
                <h1 class="display-4 "style="text-align: center;"><strong ><span style="color: white;">SISTEMA DE COMPUTO</span></strong></h1>
                <div class="card">
                    <div class="card-body" style="background-color: #dca2a2;">
                        <form method="post"  id="frmcompu" action="conexion.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="nombreE">Nombre del equipo de computo</label>
                                    <input type="text" class="form-control" id="nombreE" name="nombreE"  required placeholder="Nombre del equipo">
                                </div>
                                <div class="col-sm-6">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo"  required placeholder="Modelo">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="numero">Numero de serie</label>
                                    <input type="text" class="form-control" id="numero" name="numero"   required placeholder="Numero de serie">
                                </div>
                                <div class="col-sm-6">
                                    <label for="imagen">Imagen del dispositivo</label>
                                    <input type="file" name="imagen" id="imagen">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="nombre">Inresa tu nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" irequired placeholder="Nombre">
                                </div>
                                <div class="col-sm-6">
                                    <label for="apellido">Ingresa tu apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control"   required placeholder="Apellido">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="fecha">Ingresa la fecha</label>
                                    <input type="date" name="fecha" id="fecha" class="form-control"  required placeholder="Fecha">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"  required placeholder="ejemplo@de.com">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="tel">Telefono</label>
                                    <input type="int" name="tel" id="tel" class="form-control"  required placeholder="Telefono">
                                </div>
                                <div class="col-sm-6 ">
                                    <button class="btn btn-dark btn-block" style="margin-top: 6%;">Guardar Registro</button>
                                </div>
                            </div>
                            <br>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<script>


</script>