<?php
	class User {
		public  $name;
		public  $age;
		public static $minPassLenth = 6; //nustatome parametra, kuris niekada nesikeis

		public static function validatePass($pass) {
			if(strlen($pass)>= self::$minPassLenth) { //self naudojame vietoje this nes kreipiames i klases kintamaji
				return true;
			} else {
				return false;
			}
		}
	}

	$password = 'hello'; //nusistatome parametra kuri tikrinsime

	if(User::validatePass($password)) { //tikriame ilgi slaptazodzio :: kreipiame i static metoda
		echo 'Password valid';
	} else {
		echo 'Password NOT valid';
	}



	
