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
    </head>
    <body>
        <form action="/crud-basico/Libros/administrar_libro.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $libro->getId()?>">
                    <td>Nombre libro:</td>
                    <td><input type="text" name="nombre" value="<?php echo $libro->getNombre()?>"></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
            <input type="submit" value="Guardar">
            <a href="/crud-basico/index.php">Volver</a>
        </form>
    </body>
</html>