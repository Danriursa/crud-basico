<?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza_libro.php')
?>
    <header>
        Ingresar los datos del Libro
    </header>
    <form action="/crud-basico/Libros/administrar_libro.php" method="post">
        <table>
            <tr>
                <td>Nombre libro:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <input type="hidden" name="insertar" value="insertar">
        </table>
        <input type="submit" value="Guardar">
        <a href="/crud-basico/index.php">Volver</a>
    </form>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola_libro.php')
    ?>