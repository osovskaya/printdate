<?php

class PrintTime 
{
	public function printCurrentTime()
	{
		echo date('H:i:s'); // 21:40:41
	}
}

$date = new PrintTime;
$date->printCurrentTime();
