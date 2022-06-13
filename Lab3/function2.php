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

$result = operation(8, 2, "-");
echo $result;
?>