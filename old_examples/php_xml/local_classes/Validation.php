<?php
class Validation
{
	
	private $error = false;
	
	public function checkForBlanks($data)
	{
		if ($data === "")
		{
			$this->error = true;
			return " * Required";
		}
		else{
			return "";
		}

	}
	
	public function checkErrors(){
		return $this->error;
	}
}
	