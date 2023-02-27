<?php

    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza_libro.php')
?>
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
                            <label for="" class="form-label">Nombre</label>
                                <input type="text"class="form-control" name="nombre">
                        </div>
                        <input type="hidden" name="insertar" value="insertar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola.php')
    ?>
