<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

class PrintDate 
{
	public function printDate()
	{
		echo date('F j, Y'); // March 10, 2001
	}
}

$date = new PrintDate;
