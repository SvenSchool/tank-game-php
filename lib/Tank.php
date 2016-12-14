<?php
	class Tank {
		// INT, geeft aan hoe krachtig
		// een shot is.
		public $firePower;

		// INT, geeft aan hoeveel hitpoints
		// de tank heeft.
		public $health;

		// INT, geeft aan hoe snel de tank
		// kan bewegen.
		public $movementSpeed;

		// INT, geeft aan hoeveel ammunitie
		// de tank nog heeft.
		public $ammo;

		// STRING, geeft aan wat het type
		// van tank is. (eg. Leopard V8)
		public $type;

		/* METHODS */
		public function __construct($type, $health = 100, $firepower = 20) {
			$this->type = $type;
			$this->firePower = $firepower;
			$this->ammo = 10;
			$this->health = $health;
		}

		public function drive() {
			return "$this->type is driving!";
		}

		public function aim() {

		}

		public function shoot(Tank $obj) {
			if ($this->checkAmmo()) {
				$this->ammo -= 1;
				return "Shooting at {$obj->type}.";
				$obj->takeDamage($this->firePower);
			} else {
				return "Ammo depleted...";

			}
		}

		public function takeDamage($amount) {
			$this->health -= $amount;
		}

		public function checkAmmo() {
			if ($this->ammo > 0) {
				return true;
			} else {
				return false;
			}
		}

		/* GETTERS & SETTERS */
		
	}
?>