<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/crud-basico/conexion.php');
    class CrudAutor{
        public function __construct(){}
        public function insertar($autor){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO autores values(NULL,:nombre,:direccion,:rh,:correo,:telefono,:pais,:ciudad)');
            $insert->bindValue('nombre',$autor->getNombre());
            $insert->bindValue('direccion',$autor->getDireccion());
            $insert->bindValue('rh',$autor->getRh());
            $insert->bindValue('correo',$autor->getCorreo());
            $insert->bindValue('telefono',$autor->getTelefono());
            $insert->bindValue('pais',$autor->getPais());
            $insert->bindValue('ciudad',$autor->getCiudad());
            $insert->execute();
        }
        public function mostrar(){
            $db=Db::conectar();
            $listaAutores=[];
            $select=$db->query('SELECT * FROM autores');
            foreach($select->fetchAll() as $autor){
                $myAutor= new Autor();
                $myAutor->setId($autor['id']);
                $myAutor->setNombre($autor['nombre']);
                $myAutor->setDireccion($autor['direccion']);
                $myAutor->setRh($autor['rh']);
                $myAutor->setCorreo($autor['correo']);
                $myAutor->setTelefono($autor['telefono']);
                $myAutor->setPais($autor['pais']);
                $myAutor->setCiudad($autor['ciudad']);
                $listaAutores[]=$myAutor;
            }
            return $listaAutores;
        }
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar= $db->prepare('DELETE FROM autores WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }
        public function obtenerAutor($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM autores WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $autor=$select->fetch();
            $myAutor= new Autor();
            $myAutor->setId($autor['id']);
            $myAutor->setNombre($autor['nombre']);
            $myAutor->setDireccion($autor['direccion']);
            $myAutor->setRh($autor['rh']);
            $myAutor->setCorreo($autor['correo']);
            $myAutor->setTelefono($autor['telefono']);
            $myAutor->setPais($autor['pais']);
            $myAutor->setCiudad($autor['ciudad']);
            return $myAutor;
        }
        public function actualizar($autor){
            $db=DB::conectar();
            $actualizar=$db->prepare('UPDATE autores SET nombre=:nombre,direccion=:direccion,rh=:rh,correo=:correo,telefono=:telefono,pais=:pais,ciudad=:ciudad WHERE ID=:id');
            $actualizar->bindValue('id',$autor->getId());
            $actualizar->bindValue('nombre',$autor->getNombre());
            $actualizar->bindValue('direccion',$autor->getDireccion());
            $actualizar->bindValue('rh',$autor->getRh());
            $actualizar->bindValue('correo',$autor->getCorreo());
            $actualizar->bindValue('telefono',$autor->getTelefono());
            $actualizar->bindValue('pais',$autor->getPais());
            $actualizar->bindValue('ciudad',$autor->getCiudad());
            $actualizar->execute();
        }
    }


?>