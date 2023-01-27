<?php

abstract class BMW{

	public function getBMWCar()
	{
		echo "BMW Started";
	}

	abstract public function startBmwEngine();

	public function normalCarStart(){
		echo "Normal Class Started from BMW!!";
	}

}

?>