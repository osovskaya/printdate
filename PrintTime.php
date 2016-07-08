<?php

class PrintTime 
{
	public function printCurrentTime()
	{
		echo date('g:i a'); // 9:47 pm
	}

    public function printCurrentTimeSeconds()
	{
		echo date('g:i a s \s\e\c'); // 9:56 pm 22 sec
	}
}

