<?php
include 'Bmw.php';
include 'Turbo.php';
include 'Nitro.php';
include 'Audi.php';
//CONSTRUCTOR => method => class - object => called
class Car extends Bmw implements Audi{
	use Turbo;
	use Nitro;
	//public = globally accessable
	//private = only accessable from class
	//protected = accessable from class and inherited classes

	public function normalCarStart(){
		echo "Normal Class Started!!";
	}

	private $enginePower = "1500cc";

	public function getEnginePower()//GETTER
	{
		echo "the value:".$this->enginePower."<br>";
	}

	public function setEnginePower($value)
	{
		$this->enginePower = $value;
		echo "Value Reset!<br>";
	}

	public function startBmwEngine()
	{

	}

	public function audiStart(){

	}
	

}

?>