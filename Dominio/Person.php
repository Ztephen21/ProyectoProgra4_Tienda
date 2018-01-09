<?php
	class Person
	{
		private $name;
		private $lastname;
		private $identificationCard;
		private $telephone;
		private $email;
		


		public function Person($name,$lastname,$identificationCard,$telephone,$email)
		{
			$this->name = $name;
			$this->lastname = $lastname;
			$this->identificationCard = $identificationCard;
			$this->telephone = $telephone;
			$this->email = $email;
		}



		public function getName()
		{
			return $this->name;
		}

		public function getLastname()
		{
			return $this->lastname;
		}

		public function getIdentificationCard()
		{
			return $this->identificationCard;
		}

		public function getTelephone()
		{
			return $this->telephone;
		}

		public function getEmail()
		{
			return $this->email;
		}
		
	}

?>