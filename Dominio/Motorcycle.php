<?php
	class Motorcycle
	{
		private $id;
		private $series;
		private $brand;
		private $model;
		private $engine;
		private $price;
		private $year;
		private $description;
		private $type;
		


		public function Motorcycle($id,$series,$brand,$model,$engine,$price,$year,$description,$type)
		{
			$this->id = $id;
			$this->series = $series;
			$this->brand = $brand;
			$this->model = $model;
			$this->engine = $engine;
			$this->price = $price;
			$this->year = $year;
			$this->description = $description;
			$this->type = $type;
		}



		public function getId()
		{
			return $this->id;
		}

		public function getSeries()
		{
			return $this->series;
		}

		public function getBrand()
		{
			return $this->brand;
		}

		public function getModel()
		{
			return $this->model;
		}

		public function getEngine()
		{
			return $this->engine;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function getYear()
		{
			return $this->year;
		}

		public function getDescription()
		{
			return $this->description;
		}

		public function getType()
		{
			return $this->type;
		}
		
	}

?>