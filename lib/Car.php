<?php
	class Car {
		public $weight;
		public $topSpeed;
		public $color;

		public $brand;
		public $type;

		public $fuel;
		public $tankCapacity;
		public $fuelLeft;

		// $car = new Car('Ford', 'Blue');
		public function __construct($brand, $color) {
			$this->brand = $brand;
			$this->color = $color;
		}

		public function display() {
			return "This is a ".$this->color." ".$this->brand."."	;
		}

		public function drive($km) {
			if ($km <= $this->fuel) {
				$this->fuel -= $km;
				return "This car is driving for {$km}km and lost $km litres of fuel. You have ".$this->fuel." litres left in your tank!";
			} else {
				$kmleft = $km - $this->fuel;
				return "You don't have enough fuel to reach your destination, you have <b>{$kmleft}</b>km left to travel and need <b>{$kmleft}</b> more litres of fuel.";
			}
		}



	/* GETTERS & SETTERS */

		// WEIGHT
		public function setWeight($weight) {
			$this->weight = $weight;
		}

		public function getWeight() {
			return $this->weight." kg";
		}

		// TANK CAPACITY
		public function setTankCapacity($tank) {
			$this->tankCapacity = $tank;
			return "Your tank capacity is now <b>$tank</b>";
		}

		public function getTankCapacity() {
			return $this->tankCapacity;
		}

		// FUEL
		public function setFuel($fuel) {
			if ($this->tankCapacity >= $fuel) {
				$this->fuel = $fuel;
			} else {
				$this->fuel = $this->tankCapacity;

				$left = $fuel - $this->tankCapacity;
				$this->fuelLeft = $left;
				return "I've topped off your tank, you have <b>$left</b> litres left.";
			}
		}

		public function getFuel() {
			return $this->fuel;
		}
	}
?>