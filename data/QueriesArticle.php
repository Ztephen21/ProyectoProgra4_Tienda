<?php

  include('../Dominio/Article.php');

  class QueriesArticle
  {
      private $data;

      function __construct() 
      {
          require_once ('data.php');
          $this->data = new Data();
      }


      function insertArticle($article) 
      {
          $id;
          $booleano = 0;
          $conn = new mysqli($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());
    
          if (!$conn) 
          {
              die("Connection failed: " . mysqli_connect_error());
          }


          $statement = $conn->prepare("CALL insertarArticulo(?,?,?,?,?,?)");

          $statement->bind_param("issssi", $id,$article->getName(),$article->getDescription(),$article->getBrand(),$article->getType(),$article->getPrice());

          $statement->execute();

          if ($statement == TRUE) 
          {
            
              $booleano = 1;
          } 
          else 
          {
             
          }
          $statement->close();
          $conn->close();

          return $booleano;
      }



  function updateArticulos($Articulo) {


      $conn = new mysqli($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $statement = $conn->prepare("CALL actualizararticulo(?,?,?,?,?,?)");
      $statement->bind_param("issssi", $Articulo->getID(),$Articulo->getNombre(),$Articulo->getDescripcion(), $Articulo->getMarca(), $Articulo->getTipo(),$Articulo->getPrecio());
      $statement->execute();
      $statement->close();
      $conn->close();
  }

 function eliminarArticulo($id){


       $conn = new mysqli($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       $statement = $conn->prepare("CALL eliminararticulo(?)");
       $statement->bind_param("i", $id);
       $statement->execute();
       if ($statement == true) {
           echo("se elimino Correctamente");
       } else {
           throw new Exception("Error al eliminar el articulo");
       }
       $statement->close();
       $conn->close();
   }

   function mostrarArticulos() {

       $conn = mysqli_connect($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());
       $conn->set_charset('utf8');
       $todosArticulos= array();

       $statement = $conn->query("CALL mostrararticulos()");

       $result=$statement->execute();

       if ($result) {
           while ($row = $result->fetch_assoc()) {
               array_push($todosArticulos, new Articulo($row['idarticulo'], $row['nombrearticulo'], $row['descripcionarticulo'], $row['marcaarticulo'], $row['tipoarticulo'], $row['precioarticulo']));
           }
       } else {
           echo 'no se pudo acceder';
       }
       $conn->close();
       return $HorarioDisponible;
   }




}


 ?>
