<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/crud_libro.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/libro.php');
    $crud=new CrudLibro();
    $libro=new Libro();
    $listaLibros=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza_libro.php')
    ?>
        <div class="container text-center">

            <table>
                <head>
                    <td>Nombre</td>
                    <td>Actualizar</td>
                    <td>Eliminar</td>
                </head>
                <body>
                    <?php foreach ($listaLibros as $libro) {?>
                        <tr>
                            <td><?php echo $libro->getNombre() ?></td>
                            <td><a href="/crud-basico/Libros/actualizar_libro.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
                            <td><a href="/crud-basico/Libros/administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
                        </tr>
                        <?php }?>
                    </body>
                </table>
                <a href="/crud-basico/index.php">Volver</a>
        </div>
    </body>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola_libro.php')
    ?>
