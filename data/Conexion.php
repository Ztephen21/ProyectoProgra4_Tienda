<?php
class Conexion{
private $servidor;
private $usuario;
private $contra;
private $base;

function Conexion(){
  $this->servidor="localhost";
  $this->usuario="root";
  $this->contra="";
  $this->base="dbtienda";
}

function conectar(){
  $conexion=mysqli_connect($this->servidor,$this->usuario,$this->contra,$this->base);
  return  $conexion;

  echo "Conexion exitosa";
}


}
 ?>
