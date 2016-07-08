<?php

class PrintTime 
{
	public function printCurrentTime()
	{
		echo date('g:i a'); // 9:47 pm
	}
}

$date = new PrintTime;
$date->printCurrentTime();
