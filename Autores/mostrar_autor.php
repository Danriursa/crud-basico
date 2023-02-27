<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/crud_autor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/autor.php');
    $crud=new CrudAutor();
    $autor=new Autor();
    $listaAutores=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza_autor.php')
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tabla Autores
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <th>Nombre</th>
                            <th>Id</th>
                            <th>Direccion</th>
                            <th>Rh</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </thead>
                        <body>
                            <?php foreach ($listaAutores as $autor) {?>
                            <tr>
                                <td><?php echo $autor->getId() ?></td>
                                <td><?php echo $autor->getNombre() ?></td>
                                <td><?php echo $autor->getDireccion() ?></td>
                                <td><?php echo $autor->getRh() ?></td>
                                <td><?php echo $autor->getCorreo() ?></td>
                                <td><?php echo $autor->getTelefono() ?></td>
                                <td><?php echo $autor->getPais() ?></td>
                                <td><?php echo $autor->getCiudad() ?></td>
                                <td><a href="/crud-basico/Autores/actualizar_autor.php?id=<?php echo $autor->getId()?>&accion=a" class="btn btn-primary">Actualizar</a></td>
                                <td><a href="/crud-basico/Autores/administrar_autor.php?id=<?php echo $autor->getId()?>&accion=e" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                            <?php }?>
                        </body>
                    </table>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
</div>


    </body>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola.php')
    ?>