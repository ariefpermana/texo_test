
<form action="" method="POST" accept-charset="utf-8">
	<label>Order ID : </label>
		<input type="text" name="num" placeholder="Enter here" placeholder="12, 21, 83, .." required>

	<br>
	<br>

	<button type="submit" name="submit" value="even">EVEN</button>
	<button type="submit" name="submit" value="odd">ODD</button>
</form>

<?php 

if($_POST['submit'] == "even")
{
	$number = explode(',', $_POST['num']);

	if(count($number) < 3)
	{
		echo 'Please fill min number total 3';

		die;
	}


	foreach ($number as $value) 
	{
		if($value % 2 == 0)
		{
			$even[] = $value;
		}
	}

	if(empty($even))
	{
		echo 'All Odd integer, no outlier';
		die;
	}
	echo "The Even Number is : ".implode(',', $even);
}else{
	$number = explode(',', $_POST['num']);

	if(count($number) < 3)
	{
		echo 'Please fill min number total 3';

		die;
	}


	foreach ($number as $value) 
	{
		if($value % 2 != 0)
		{
			$odd[] = $value;
		}
	}
	
	if(empty($odd))
	{
		echo 'All even integer, no outlier';
		die;
	}
	echo "The Even Number is : ".implode(',', $odd);
}

?>