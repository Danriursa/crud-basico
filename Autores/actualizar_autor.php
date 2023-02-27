<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/crud_autor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/autor.php');
    $crud= new CrudAutor();
    $autor= new Autor();
    $autor=$crud->obtenerAutor($_GET['id']);
?>
<html>
    <head>
        <title>Administrar Libro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <main>

        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Actualizar Autor
                        </div>
                        <div class="card-body">
                            <form action="/crud-basico/Autores/administrar_autor.php" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Id</label>
                                    <input readonly type="text" class="form-control" name="id" value="<?php echo $autor->getId()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $autor->getNombre()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Dirección</label>
                                        <input type="text"class="form-control" name="direccion" value="<?php echo $autor->getDireccion()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Rh</label>
                                        <input type="text"class="form-control" name="rh" value="<?php echo $autor->getRh()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Correo</label>
                                        <input type="text"class="form-control" name="correo" value="<?php echo $autor->getCorreo()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Telefono</label>
                                        <input type="text"class="form-control" name="telefono" value="<?php echo $autor->getTelefono()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Pais</label>
                                        <input type="text"class="form-control" name="pais" value="<?php echo $autor->getPais()?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Ciudad</label>
                                        <input type="text"class="form-control" name="ciudad" value="<?php echo $autor->getCiudad()?>">
                                </div>
                                <input type="hidden" name="insertar" value="insertar">
                                <input type="submit" value="Guardar" class="btn btn-success">
                                <a href="/crud-basico/Autores/mostrar_autor.php" type="button" class="btn btn-danger">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola.php')
    ?>