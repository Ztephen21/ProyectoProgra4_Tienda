<!DOCTYPE html>
<html>

	<head>
		<title>Motocicletas</title>

		<!--JavaScritp-->
		<script src="../JS/JQuery.js"></script>
		
	</head>

	<body>	
		
		<form name="MotorcycleForm" id="MotorcycleForm">

			<label for="series">Serie:</label>
			<input type="text"  id="series" name="series">
		
			<br/>
			<br/>

			<label for="brand">Marca:</label>
			<input type="text" id="brand" name="brand">
		
			<br/>
			<br/>

			<label for="model">Modelo:</label>
			<input type="text" id="model" name="model">
			
			<br/>
			<br/>

			<label for="engine">Cilindraje:</label>
			<input type="text" id="engine" name="engine">
			
			<br/>
			<br/>

			<label for="price">Precio:</label>
			<input type="text" id="price" name="price">
		
			<br/>
			<br/>

			<label for="year">Año:</label>
			<input type="text" id="year" name="year">
		
			<br/>
			<br/>

			<label for="description">Descripcion:</label>
			<input type="text" id="description" name="description">
		
			<br/>
			<br/>

			<label for="type">Tipo:</label>
			<select id="type" name="type">
				<option>Pistera</option>
				<option>Montaña</option>
				<option>Pandillera</option>
			</select>
		
			<br/>
			<br/>

			<button  id="save" name="save">Guardar</button>

		</form>	

		<script src="../JS/MotorcycleAction.js"></script>
		
	</body>

</html>
