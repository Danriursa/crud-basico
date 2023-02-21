<?php
    require_once('crud_autores.php');
    require_once('autor.php');

    $crud= new CrudAutor();
    $autor= new Autor();
    if (isset($_POST['insertar'])) {
        $autor->setNombre($_POST['nombre']);
        $crud->insertar($autor);
        header('Location: index.php');
    }elseif (isset($_POST['actualizar'])) {
        $autor->setId($_POST['id']);
        $autor->setNombre($_POST['nombre']);
        $crud->actualizar($autor);
        header('Location: index.php');
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: index.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: actualizar.php');
    }

?>