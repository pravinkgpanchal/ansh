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


    /**
    * Task 2: Capability  to handle multiple numer for addition
    */
    public function add($a=0)
    {
    
		// get no. arg pass by user
	    $num_arg = func_num_args(); 

	    $addition = 0;
	    for ($i=0; $i<$num_arg; $i++) 
	    {
	    	$addition +=  func_get_arg($i); 
	    }
	    echo $addition;
    }

    /**
    * Task 3: \n consider as seperator
    */
    public function addition()
    {    
		// get no. arg pass by user
	    $num_arg = func_num_args(); 

	    $addition = 0;
	    for ($i=0; $i<$num_arg; $i++) 
	    {
	    	/**
	    	* Find \n and use as separator
	    	*/
	    	$par =  func_get_arg($i);
	    	if(strpos($par, '\n'))
	    	{
	    		$arr = explode('\n',$par);
	    		$arr_sum = array_sum($arr);
	    		$addition += $arr_sum;
	    	}
	    	else
	    	{
	    		$addition +=  func_get_arg($i);
	    	}	    	
	    }
	    echo $addition;
    }


     /**
    * Task 4: find delimiter and usr as seperator
    */
    public function addition_delimiter()
    {    
		// get no. arg pass by user
	    $num_arg = func_num_args(); 

	    $addition = 0;
	    for ($i=0; $i<$num_arg; $i++) 
	    {
	    	/**
	    	* Find delimiter and use as separator
	    	*/
	    	$par =  func_get_arg($i);
	    	
	    	
	    	// Find delimiter
			$f_occ = strpos($par, "\\");
			$l_occ = strpos($par, "\\", 2);
			$delimiter = substr($par,$f_occ+2,$l_occ-2);


			// slit inot numbers
			$arg_arr = explode($delimiter, $par);

			// print_r($arg_arr);
			$second = explode('\\',$arg_arr[1]);
			$n = count($second);
			$second = $second[$n-1];

			$addition = $second;

			$remain_arg = count($arg_arr);
			if($remain_arg>2)
			{

				for($i=1; $i< $remain_arg ;$i++)
				{
					$addition += $arg_arr[$i];
				}
			}			
	    }
	    echo $addition;
    }



}

array_shift($argv);
$className = array_shift($argv);
$funcName = array_shift($argv);

call_user_func_array(array($className, $funcName), $argv);