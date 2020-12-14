<?php
namespace App;
class Vector
{
	public $x, $y;
	function __construct($x, $y)
	{
		$this->x = $x; $this->y = $y;
	}

	public function Length()
	{
		return sqrt($this->x * $this->x + $this->y * $this->y);
	}

	public function IsZeroVector()
	{
		return ($this->x == 0 && $this->y == 0);
	}

	public function IsPerpendicularTo($otherVector)
	{
		return ($this->x * $otherVector->x + $this->y * $otherVector->y) == 0;
	}
}