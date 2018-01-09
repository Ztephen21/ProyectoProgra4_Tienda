
<?php
include('../dominio/Motorcycle.php');
class consultasMotos{
  private $data;

  function __construct() {
      require_once ('data.php');
      $this->data = new Data();
  }


  function insertarMoto($Motorcycle) {
  $id;
      $booleano = 0;
      $conn = new mysqli($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $statement = $conn->prepare("CALL insertarMoto(?,?,?,?,?,?,?,?,?)");
      $statement->bind_param("issssiiss", $id, $Motorcycle->getSeries(),  $Motorcycle->getBrand(),$Motorcycle->getModel(), $Motorcycle->getEngine(),$Motorcycle->getPrice(),
      $Motorcycle->getYear(),$Motorcycle->getDescription(),
        $Motorcycle->getType());
      $statement->execute();

      if ($statement == TRUE) {

          $booleano = 1;
      } else {
          
      }
      $statement->close();
      $conn->close();

      return $booleano;
  }

  function updateMoto($Motorcycle) {


      $conn = new mysqli($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $statement = $conn->prepare("CALL actualizarMoto(?,?,?,?,?,?,?,?,?)");
      $statement->bind_param("issssiiss",$Motorcycle-> getId(), $Motorcycle->getSeries(),  $Motorcycle->getBrand(),$Motorcycle->getModel(), $Motorcycle->getEngine(),$Motorcycle->getPrice(),
      $Motorcycle->getYear(),$Motorcycle->getDescription(),
        $Motorcycle->getType());
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
       $statement = $conn->prepare("CALL eliminarMoto(?)");
       $statement->bind_param("i", $id);
       $statement->execute();
       if ($statement == true) {
           echo("se elimino Correctamente");
       } else {
           throw new Exception("Error al eliminar la moto");
       }
       $statement->close();
       $conn->close();
   }

   function mostrarMotos() {

       $conn = mysqli_connect($this->data->getServer(), $this->data->getUser(), $this->data->getPass(), $this->data->getDbName());
       $conn->set_charset('utf8');
       $todosMotos= array();

       $statement = $conn->query("CALL mostrarMotos");
       $result=$statement ->execute();
       if ($result) {
           while ($row = $result->fetch_assoc()) {
               array_push($todosMotos, new Motorcycle($row['idmoto'], $row['seriemoto '], $row['marcamoto '], $row['modelomoto'], $row['cilindrajemoto'], $row['preciomoto'],$row[' 	anomoto'],$row[' 	descripcionmoto'],$row[' 	tipomoto']));
           }
       } else {
           echo 'no se pudo acceder';
       }
       $conn->close();
       return $todosMotos;
   }




}


 ?>

