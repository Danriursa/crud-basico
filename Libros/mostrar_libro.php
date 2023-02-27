<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/crud_libro.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/libro.php');
    $crud=new CrudLibro();
    $libro=new Libro();
    $listaLibros=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza_libro.php')
    ?>
        <div class="container">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            
                            Tabla Libros
                        </div>
                        <div class="card-body">
                            <table class="table text-center">
                                <thead>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <body>
                                    <?php foreach ($listaLibros as $libro) {?>
                                        <tr>
                                            <td><?php echo $libro->getId()?></td>
                                            <td><?php echo $libro->getNombre() ?></td>
                                            <td><a href="/crud-basico/Libros/actualizar_libro.php?id=<?php echo $libro->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                            <td><a href="/crud-basico/Libros/administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                                        </tr>
                                    <?php }?>
                                </body>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola.php')
    ?>
