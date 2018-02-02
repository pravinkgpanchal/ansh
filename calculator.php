<?php


/**
* Command Caluculator library for calculation
*  Name: Pravin Panchal
*/


class Calculator
{
	/**
	* Task 1: Command line utility to sum zero to two number
	*/
    public function Sum($a=0, $b=0)
    {
        echo $sum = $a+$b;
    }

}

array_shift($argv);
$className = array_shift($argv);
$funcName = array_shift($argv);

call_user_func_array(array($className, $funcName), $argv);