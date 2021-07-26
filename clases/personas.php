<?php
  include "Conexion.php";
  class Personas extends Conexion{
    public function obtenerDatos($idpersona){
      $conexion= Conexion::conectar();
      $sql="SELECT id_persona,
                  nombre,
                  apellidos,
                  fecha,
                  sexo
                  FROM t_persona 
                  WHERE id_persona='$idpersona'";
      $result=mysqli_query($conexion, $sql);
      $persona=mysqli_fetch_array($result);
      $datos=array(
        "idpersona"=>$persona['id_persona'],
        "nombre"=>$persona['nombre'],
        "apellidos"=>$persona['apellidos'],
        "fecha"=>$persona['fecha'],
        "sexo"=>$persona['sexo'],
      );
      return $datos;
    }
    public function eliminarPersona($idpersona){
      $conexion= Conexion::conectar();
      $sql="DELETE FROM t_persona WHERE id_persona='$idpersona'";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function agregarPersona($nombre, $apellidos, $fecha, $sexo){
      $conexion= Conexion::conectar();
      $sql="INSERT INTO t_persona (nombre, apellidos, fecha, sexo) VALUES ('$nombre','$apellidos','$fecha','$sexo')";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function actualizarPersona($datos){
      $conexion= Conexion::conectar();
      $sql="UPDATE t_persona SET nombre=?, apellidos=?, fecha=?, sexo=? WHERE id_persona=?";
      $query=$conexion->prepare($sql);
      $query->bind_param(
        'ssssi',$datos['nombre'],
                $datos['apellidos'],
                $datos['fecha'],
                $datos['sexo'],
                $datos['id_persona']
      );
      $respuesta=$query->execute();
      return $respuesta;
    }
  }
?>