<?php
include ('RaceCarInterface.php');

class Car implements RaceCarInterface
{
	private $engine;
	private $capacity;
	
	public function setEngine($engine)
	{
		$this->engine = $engine;
		return $this;
	}
	
	public function setCapacity($capacity)
	{
		$this->capacity = $capacity;
		return $this;
	}
	
	public function getVMax()
	{
		return $this->engine * 50 - 300 / $this->capacity * 0.75;
	}
	
	public function getAcceleration()
	{
		return $this->engine * 2 - 100 / 1010;
	}
}