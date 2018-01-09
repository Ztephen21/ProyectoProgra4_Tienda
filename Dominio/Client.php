<?php

	class Client extends Person
	{
		private $address;
		


		public function Client($address)
		{
			$this->address = $address;
		}
		
		
		
		public function getAddress()
		{
			return $this->address;
		}
		
	}

?>