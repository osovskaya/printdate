<?php

class PrintDate 
{
	public function printCurrentDate()
	{
		echo date('F j, Y'); // March 10, 2001
	}
}

$date = new PrintDate;
$date->printCurrentDate();
