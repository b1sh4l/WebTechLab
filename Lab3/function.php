<?php 
function show($a)
{
	echo $a." world!";
}
$result = show("hi");
echo $result;
?><br>
<?php
function operation($a, $b)
{
	$arr = array($a+$b, $a-$b, $a*$b, $a/$b);
	return $arr;
	//echo "Sum = ".($a+$b); 
}

$result = operation(8, 2);
echo "Sum = ".$result[0]; ?><br><?php
echo "Sub = ".$result[1]; ?><br><?php
echo "Mul = ".$result[2]; ?><br><?php
echo "Div = ".$result[3]; ?><br><?php
?>