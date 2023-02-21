<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/crud_autor.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Autores/autor.php');

    $crud= new CrudAutor();
    $autor= new Autor();
    if (isset($_POST['insertar'])) {
        $autor->setNombre($_POST['nombre']);
        $autor->setDireccion($_POST['direccion']);
        $autor->setRh($_POST['rh']);
        $autor->setCorreo($_POST['correo']);
        $autor->setTelefono($_POST['telefono']);
        $autor->setPais($_POST['pais']);
        $autor->setCiudad($_POST['ciudad']);
        $crud->insertar($autor);
        header('Location: /crud-basico/index.php');
    }elseif (isset($_POST['actualizar'])) {
        $autor->setId($_POST['id']);
        $autor->setNombre($_POST['nombre']);
        $autor->setDireccion($_POST['direccion']);
        $autor->setRh($_POST['rh']);
        $autor->setCorreo($_POST['correo']);
        $autor->setTelefono($_POST['telefono']);
        $autor->setPais($_POST['pais']);
        $autor->setCiudad($_POST['ciudad']);
        $crud->actualizar($autor);
        header('Location: /crud-basico/index.php');
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-basico/index.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-basico/Autores/actualizar_autor.php');
    }

?>