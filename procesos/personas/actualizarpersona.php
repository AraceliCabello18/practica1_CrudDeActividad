<?php
  include "../../clases/personas.php";
  $personas=new Personas();
  $datos=array(
    "id_persona"=>$_POST['id'],
    "nombre"=>$_POST['nombre'],
    "apellidos"=>$_POST['apellidos'],
    "fecha"=>$_POST['fecha'],
    "sexo"=>$_POST['sexo'],
  );
  echo $personas->actualizarPersona($datos);
?>
