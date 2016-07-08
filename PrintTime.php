<?php

class PrintTime 
{
	public function printCurrentTime()
	{
		echo date('g:i a'); // 9:47 pm
	}

<<<<<<< HEAD
=======
    // new feature 1
>>>>>>> develop-feature2
    public function printCurrentTimeSeconds()
	{
		echo date('g:i a s \s\e\c e'); // 10:02 pm 00 sec Europe/Helsinki
	}
}

