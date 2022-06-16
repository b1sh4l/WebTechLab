<?php
$myFile = fopen("h3h3.txt","r") or die("cannot open the file!");
echo fread($myFile, filesize("h3h3.txt"));
fclose($myFile);
?>

<br><br>

<?php 
$myFile1 = fopen("h3h3.txt","r") or die("cannot open the file!");
while(!feof($myFile1))
{
	echo fgets($myFile1)."<br>"; //line by line
}
//echo fgets($myFile1); line by line
fclose($myFile1);
?>

<br><br>

<?php 
$myFile2 = fopen("h3h3.txt","r") or die("cannot open the file!");
while(!feof($myFile2))
{
	echo fgetc($myFile2); //character by character
}
//echo fgetc($myFile2); character by character
fclose($myFile2);
?>