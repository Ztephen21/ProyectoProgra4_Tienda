<!DOCTYPE html>
<html>

	<head>
		<title>Articulo</title>

		<!--JavaScritp-->
		<script src="../JS/JQuery.js"></script>

	</head>

	<body>	

		<form name="ArticleForm" id="ArticleForm">
		
			<label for="name">Nombre:</label>
			<input type="text" id="name" name="name">
		
			<br/>
			<br/>

			<label for="description">Descripcion:</label>
			<input type="text" id="description" name="description">
		
			<br/>
			<br/>

			<label for="brand">Marca:</label>
			<input type="text" id="brand" name="brand">
		
			<br/>
			<br/>

			<label for="type">Tipo:</label>
			<input type="text" id="type" name="type">

			<br/>
			<br/>

			<label for="price">Precio:</label>
			<input type="text" id="price" name="price">
		
			<br/>
			<br/>
			<input type="hidden" id="save" name="save">

			<button type="submit" >Guardar</button>
			
		</form>

		<script src="../JS/ArticleAction.js"></script>

	</body>

</html>
