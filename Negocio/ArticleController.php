<?php

    require '../data/QueriesArticle.php';

    if(isset($_POST['save']))
    {
    	
    	 insertArticle();
    }
  if(isset($_POST['delete']))
    {
    	
    	
    }
      if(isset($_POST['update']))
    {
    	
    	
    }
      if(isset($_POST['show']))
    {
    	showArticle();
    	
    }



 	

    function insertArticle()
    {

		$name = $_POST['name'];
    	$description = $_POST['description'];
    	$brand = $_POST['brand'];
    	$type = $_POST['type'];
    	$price = $_POST['price'];


   		$connect = new QueriesArticle(); 
    	$article = new Article(0,$name,$description,$brand,$type,$price);

        
       	$result = $connect->insertArticle($article); 

      if($result==1){
      	echo "se inserto";
      }else{
      		echo "no se inserto";
      }
        
    }
    function updateArticle(){
    	$id=$_POST['id'];
    	$name = $_POST['name'];
    	$description = $_POST['description'];
    	$brand = $_POST['brand'];
    	$type = $_POST['type'];
    	$price = $_POST['price'];


   		$connect = new QueriesArticle(); 
    	$article = new Article($id,$name,$description,$brand,$type,$price);

        
       	$result = $connect->updateArticulos($article); 

      if($result==1){
      	echo "se actualizo";
      }else{
      		echo "no se actualizo";
      }

    }
 



   function deleteArticle(){

      $id=$_POST['id'];
    	


   		$connect = new QueriesArticle(); 
    

        
       	$result = $connect-> eliminarArticulo($id); 

      if($result==1){
      	echo "se elimino";
      }else{
      		echo "no se elimino";
      }



   }

   function showArticle(){

$connect = new QueriesArticle();
$result=$connect->mostrarArticulos(); 



   	echo "
					<table border = 1 >
						<tr>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Marca</th>
							<th>Tipo</th>
							<th>Precio</th>
							<th>Eliminar</th>
							<th>Actualizar</th>
						</tr>
				";
				foreach($result as $article){

                   echo '


	             <form name="ArticleForm2" id="ArticleForm2">
						<tr>
							<td><input type="hidden" id="id" name="id" value=".$article->getID()."></td>
							<td><input type="text" id="name" name="name" value=".$article->getName()."></td>
							<td><input type="text" id="description" name="description" value=".$article->getDescription()."></td>
							<td><input type="text" id="brand" name="brand" value=".$article->getBrand()."></td>
							<td><input type="text" id="type" name="type" value=".$article->getType()."></td>
							<td><input type="text" id="price" name="price" value=".$article->getPrice()."></td>
							<td><button id="delete" name="delete" action="deleteArticle()" ></td>
							<td><button type="submit" id="update" name="update"></td>
							
						</tr>
                	</form>


					';






				}


   }
 
?>
