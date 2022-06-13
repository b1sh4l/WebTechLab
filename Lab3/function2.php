<?php 

function operation($a, $b, $s)
{
	if ($s == "+")
	{
	return $a+$b;
	}
	elseif ($s == "-")
	{
	return $a-$b;
	}
	elseif ($s =="*")
	{
	return $a*$b;
	}
	elseif ($s == "/")
	{
	return $a/$b;
	}
	
}

$sum = operation(8, 2, "+");
echo "Sum = ".$sum; ?> <br> <?php 
$sub = operation(8, 2, "-");
echo "Sub = ".$sub; ?> <br> <?php 
$mul = operation(8, 2, "*");
echo "Mul = ".$mul; ?> <br> <?php 
$div = operation(8, 2, "/");
echo "Div = ".$div; ?> <br> <?php 
?>