<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/crud_autor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/autor.php');
    $crud=new CrudAutor();
    $autor=new Autor();
    $listaAutores=$crud->mostrar();
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza.php')
?>
<html>
    <head>
        <title>Mostrar Autores</title>
    </head>
    <body>
        <table border=1>
            <head>
                <td>Nombre</td>
                <td>Direccion</td>
                <td>Rh</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Pais</td>
                <td>Ciudad</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </head>
            <body>
                <?php foreach ($listaAutores as $autor) {?>
                <tr>
                    <td><?php echo $autor->getNombre() ?></td>
                    <td><?php echo $autor->getDireccion() ?></td>
                    <td><?php echo $autor->getRh() ?></td>
                    <td><?php echo $autor->getCorreo() ?></td>
                    <td><?php echo $autor->getTelefono() ?></td>
                    <td><?php echo $autor->getPais() ?></td>
                    <td><?php echo $autor->getCiudad() ?></td>
                    <td><a href="/crud-basico/Autores/actualizar_autor.php?id=<?php echo $autor->getId()?>&accion=a">Actualizar</a></td>
                    <td><a href="/crud-basico/Autores/administrar_autor.php?id=<?php echo $autor->getId()?>&accion=e">Eliminar</a></td>
                </tr>
                <?php }?>
            </body>
        </table>
        <a href="/crud-basico/index.php">Volver</a>
    </body>
</html>