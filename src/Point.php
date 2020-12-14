<?php
namespace App;
class Point
{
	public $x, $y;
	function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
	public function TransferByX($dx)
	{
		$this->x = $this->x + $dx;
	}

	public function TransferByY($dy)
	{
		$this->y = $this->y + $dy;
	}
}