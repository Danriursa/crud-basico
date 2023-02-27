<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/crud_libro.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/libro.php');
    $crud= new CrudLibro();
    $libro= new Libro();
    $libro=$crud->obtenerLibro($_GET['id']);
?>
<html>
    <head>
        <title>Actualizar Libro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Ingrese los datos del autor
                    </div>
                    <div class="card-body">
                        <form action="/crud-basico/Libros/administrar_libro.php" method="post">
                            <div class="mb-3">
                                <label for="" class="form-label">Id</label>
                                <input readonly type="text" class="form-control" name="id" value="<?php echo $libro->getId()?>">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $libro->getNombre()?>">
                            </div>
                            <input type="hidden" name="actualizar" value="actualizar">
                            <input type="submit" value="Guardar" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>