<!DOCTYPE html>
<html>

	<head>
		<title>Client</title>

		<!--JavaScritp-->
		<script src="../JS/JQuery.js"></script>

	</head>

	<body>	

		<form name="ClientForm" id="ClientForm">

			<label for="name">Nombre:</label>
			<input type="text" id="name" name="name">
		
			<br/>
			<br/>

			<label for="lastname">Apellido:</label>
			<input type="text" id="lastname" name="lastname">
		
			<br/>
			<br/>

			<label for="identificationCard">Cedula:</label>
			<input type="text" id="identificationCard" name="identificationCard">
		
			<br/>
			<br/>

			<label for="telephone">Telefono:</label>
			<input type="text" id="telephone" name="telephone">
		
			<br/>
			<br/>

			<label for="email">Email:</label>
			<input type="text" id="email" name="email">
		
			<br/>
			<br/>
		
			<label for="address">Direccion:</label>
			<input type="text" id="address" name="address">
		
			<br/>
			<br/>

			<button  id="save" name="save">Guardar</button>

		</form>

		<script src="../JS/ClientAction.js"></script>

	</body>

</html>
