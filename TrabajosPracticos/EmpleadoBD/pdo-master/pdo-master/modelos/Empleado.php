<?php

if (!defined('CONTROLADOR'))
    exit;

require_once 'Conexion.php';

class Empleado {

    private $id;
    private $nombre;
    private $dni;
    private $apellido;
    private $foto;

    const TABLA = 'empleado';
    
    public function __construct($foto=null, $apellido=null, $nombre=null, $dni=null, $id=null) {
        $this->nombre = $nombre;
        $this->dni = $dni; 
        $this->id = $id;
         $this->apellido = $apellido;
        $this->foto = $foto;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDNI() {
        return $this->dni;
    }

     public function getApellido() {
        return $this->apellido;
    }

     public function getFoto() {
        return $this->foto;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDNI($dni) {
        $this->dni = $dni;
    }

        public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

        public function setFoto($foto) {
        $this->foto = $foto;
    }


    public function guardar() {
        $conexion = new Conexion();
        if ($this->id) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, dni = :dni ,
                apellido = :apellido ,foto = :foto WHERE id = :id');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':dni', $this->dni);
             $consulta->bindParam(':apellido', $this->apellido);
              $consulta->bindParam(':foto', $this->foto);
            $consulta->bindParam(':id', $this->id);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre, dni,apellido,foto) VALUES(:nombre, :dni,:apellido,:foto)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':dni', $this->dni);
            $consulta->bindParam(':apellido', $this->apellido);
              $consulta->bindParam(':foto', $this->foto);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $this->id);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorId($id) {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT nombre, dni,apellido,foto FROM ' . self::TABLA . ' WHERE id = :id');
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro) {
            return new self($registro['nombre'], $registro['dni'], $registro['apellido'], $registro['foto'],$id);
        } else {
            return false;
        }
    }

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT id, nombre, dni,apellido,foto FROM ' . self::TABLA . ' ORDER BY nombre');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        return $registros;
    }

}
