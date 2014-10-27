<?php
include ('EngineInterface.php');

class Engine implements EngineInterface
{
	private $HP;
	
	public function setHP($HP)
	{
		$this->HP = $HP;
		return $this;
	}
	
	public function getHP()
	{
		return $this->HP;
	}
}