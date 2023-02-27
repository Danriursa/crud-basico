<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/crud_libro.php');
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/Libros/libro.php');

    $crud= new CrudLibro();
    $libro= new Libro();
    if (isset($_POST['insertar'])) {
        $libro->setNombre($_POST['nombre']);
        $crud->insertar($libro);
        header('Location: /crud-basico//Libros/mostrar_libro.php');
    }elseif (isset($_POST['actualizar'])) {
        $libro->setId($_POST['id']);
        $libro->setNombre($_POST['nombre']);
        $crud->actualizar($libro);
        header('Location: /crud-basico/Libros/mostrar_libro.php');
    }elseif ($_GET['accion']=='e') {
        $crud->eliminar($_GET['id']);
        header('Location: /crud-basico/Libros/mostrar_libro.php');
    }elseif ($_GET['accion']=='a') {
        header('Location: /crud-basico/Libros/actualizar_libro.php');
    }

?>