<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/crud_autor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/autor.php');
    $crud= new CrudAutor();
    $autor= new Autor();
    $autor=$crud->obtenerAutor($_GET['id']);
?>
<html>
    <head>
        <title>Actualizar autor</title>
    </head>
    <body>
        <form action="/crud-basico/Autores/administrar_autor.php" method="post">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $autor->getId()?>">
                    <td>Nombre autor:</td>
                    <td><input type="text" name="nombre" value="<?php echo $autor->getNombre()?>"></td>
                </tr>
                    <td>Direccion autor:</td>
                    <td><input type="text" name="direccion" value="<?php echo $autor->getDireccion()?>"></td>
                </tr>
                <tr>
                    <td>Rh autor:</td>
                    <td><input type="text" name="rh" value="<?php echo $autor->getRh()?>"></td>
                </tr>
                <tr>
                    <td>Correo autor:</td>
                    <td><input type="text" name="correo" value="<?php echo $autor->getCorreo()?>"></td>
                </tr>
                <tr>
                    <td>Telefono autor:</td>
                    <td><input type="number" name="telefono" value="<?php echo $autor->getTelefono()?>"></td>
                </tr>
                <tr>
                    <td>Pais autor:</td>
                    <td><input type="text" name="pais" value="<?php echo $autor->getPais()?>"></td>
                </tr>
                <tr>
                    <td>Ciudad autor:</td>
                    <td><input type="text" name="ciudad" value="<?php echo $autor->getCiudad()?>"></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
            <input type="submit" value="Guardar">
            <a href="/crud-basico/index.php">Volver</a>
        </form>
    </body>
</html>