
<form action="" method="POST" accept-charset="utf-8">
	<label>Order ID : </label>
		<input type="text" name="num" placeholder="Enter here" required>

	<br>
	<br>

	<button type="submit" name="submit">Submit</button>
</form>

<?php 

if(isset($_POST['num']))
{
	$number = $_POST['num'];

	$lengt_num = strlen($number);
	$lengt_split = str_split($number);

	$hitung = 0;

	for ($i=0; $i < $lengt_num;) 
	{ 			
		$hitung += pow($lengt_split[$i],$lengt_num);

		$i++;
	}

	if($hitung == $_POST['num'])
	{
		echo "This number is Narcissistic!";

	}else{
		echo "This number is Not Narcissistic!";
	}
}

?>