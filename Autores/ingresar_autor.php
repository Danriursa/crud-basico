<?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cabeza_autor.php')
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ingrese los datos del autor
                </div>
                <div class="card-body">
                    <form action="/crud-basico/Autores/administrar_autor.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre</label>
                                <input type="text"class="form-control" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Dirección</label>
                                <input type="text"class="form-control" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Rh</label>
                                <input type="text"class="form-control" name="rh">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo</label>
                                <input type="text"class="form-control" name="correo">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Telefono</label>
                                <input type="text"class="form-control" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Pais</label>
                                <input type="text"class="form-control" name="pais">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ciudad</label>
                                <input type="text"class="form-control" name="ciudad">
                        </div>
                        <input type="hidden" name="insertar" value="insertar">
                        <input type="submit" value="Guardar" class="btn btn-success">
                    </form>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/cola.php')
    ?>