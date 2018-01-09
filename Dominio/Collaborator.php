<?php

	class Collaborator extends Person
	{

		private $workArea;
		private $abilities;
		


		public function Collaborator($workArea,$abilities)
		{

			$this->workArea = $workArea;
			$this->abilities = $abilities;
		}



		public function getWorkArea()
		{
			return $this->workArea;
		}

		public function getAbilities()
		{
			return $this->abilities;
		}

	}

?>