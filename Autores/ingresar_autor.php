<html>
    <head>
        <title>Ingresar Libro</title>
    </head>
    <header>
        Ingresar los datos del Libro
    </header>
    <form action="/crud-basico/Autores/administrar_autor.php" method="post">
        <table>
            <tr>
                <td>Nombre autor:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Direccion autor:</td>
                <td><input type="text" name="direccion"></td>
            </tr>
            <tr>
                <td>Rh autor:</td>
                <td><input type="text" name="rh"></td>
            </tr>
            <tr>
                <td>Correo autor:</td>
                <td><input type="text" name="correo"></td>
            </tr>
            <tr>
                <td>Telefono autor:</td>
                <td><input type="text" name="telefono"></td>
            </tr>
            <tr>
                <td>Pais autor:</td>
                <td><input type="text" name="pais"></td>
            </tr>
            <tr>
                <td>Ciudad autor:</td>
                <td><input type="text" name="ciudad"></td>
            </tr>
            <input type="hidden" name="insertar" value="insertar">
        </table>
        <input type="submit" value="Guardar">
        <a href="/crud-basico/index.php">Volver</a>
    </form>
</html>