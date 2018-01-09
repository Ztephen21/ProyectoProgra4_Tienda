<?php

	class Article
	{
		private $id;
		private $name;
		private $description;
		private $brand;
		private $type;
		


		public function Article($id,$name,$description,$brand,$type)
		{
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->brand = $brand;
			$this->type = $type;
		}


		public function getId()
		{
			return $this->id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getDescription()
		{
			return $this->description;
		}

		public function getBrand()
		{
			return $this->brand;
		}

		public function getType()
		{
			return $this->type;
		}

	}

?>