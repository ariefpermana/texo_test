<?php 

$haystack = array('red','blue','yellow',"black","grey");

$needle = "blue";

$cek = findNeedle($haystack,$needle);


function findNeedle($haystack='',$needle="")
{
	$count = 0;
	foreach ($haystack as $value) 
	{
		if($value == $needle)
		{
			$count ++;
		}
	}

	echo $count;
}

?>