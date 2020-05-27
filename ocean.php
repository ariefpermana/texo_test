<?php 

$val_array = array(1,2,3,4,5,6);

$diff = 2;

blueOcean($val_array,$diff);

function blueOcean($val_array='',$diff="")
{
	
	if (($key = array_search($diff, $val_array)) !== false) 
	{
    	unset($val_array[$key]);
	}

	echo implode(',', $val_array);
}

?>