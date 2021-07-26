<?php
  include "../../clases/personas.php";
  $personas=new Personas();
  $nombre=$_POST['nombreu'];
  $apellidos=$_POST['apellidosu'];
  $fecha=$_POST['fechau'];
  $sexo=$_POST['sexou'];
  echo $personas->agregarPersona($nombre,$apellidos,$fecha,$sexo);
?>