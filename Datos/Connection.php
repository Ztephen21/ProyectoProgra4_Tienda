<?php

	class Connection extends mysqli
	{
		private $server = "localhost";
		private $user = "root";
		private $password = "";
		private $database = "sistemaprogralv";
			
		function Connection()
		{
			$connect = parent:: __construct($this->server,$this->user,$this->password,$this->database);

			if (!mysqli_connect_errno($connect)) 
			{
    			echo "Conectado";
    			return $connect;
			}
			else
			{
				echo "Fallo la Coneccion: " . mysqli_connect_error();
				return;
			}
		}
	}
?>