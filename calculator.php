<?php


/**
* Command Calculator library for calculation
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
    public function add()
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


    /**
    * Task 5: Negative number not allowed
    */
    public function addition_negative()
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

			if($second <0)
			{
				echo "Error: Negative number not allowed !";
				die;
			}

			$addition = $second;

			$remain_arg = count($arg_arr);
			if($remain_arg>2)
			{

				for($i=1; $i< $remain_arg ;$i++)
				{
					if($arg_arr[$i] <0)
					{
						echo "Error: Negative number not allowed !";
						die;
					}

					$addition += $arg_arr[$i];
				}
			}			
	    }
	    echo $addition;
    }



    /**
    * Task 6: Negative number not allowed andd show negative number
    */
    public function addition_neg_print()
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

			$negative_num = array();
			if($second <0)
			{
				$negative_num[] = $second;
			}

			$addition = $second;

			$remain_arg = count($arg_arr);
			if($remain_arg>2)
			{

				for($i=1; $i< $remain_arg ;$i++)
				{
					if($arg_arr[$i] <0)
					{
						$negative_num[] = $arg_arr[$i];
					}

					$addition += $arg_arr[$i];
				}
			}			
	    }

	    if(count($negative_num))
	    {
	    	echo "Error: Negative numbers [".implode(",", $negative_num)."] not allowed !";
	    }
	    else
	    {
	    	echo $addition;
	    }

    }

    /**
    * Task 7: ignore number those ar greather than 1000
    */
    public function add_ignore($a=0)
    {
    
		// get no. arg pass by user
	    $num_arg = func_num_args(); 

	    $addition = 0;
	    for ($i=0; $i<$num_arg; $i++) 
	    {
	    	if(  func_get_arg($i) > 1000)
	    	{
	    		continue;
	    	}
	    	$addition +=  func_get_arg($i); 
	    }
	    echo $addition;
    }



    /**
    * Task 8: multiply number
    */
    public function multiply()
    {
    
		// get no. arg pass by user
	    $num_arg = func_num_args(); 

	    $multiply = 1;
	    for ($i=0; $i<$num_arg; $i++) 
	    {
	       	$multiply *=  func_get_arg($i); 
	    }
	    echo $multiply;
    }




}

array_shift($argv);
$className = array_shift($argv);
$funcName = array_shift($argv);

call_user_func_array(array($className, $funcName), $argv);