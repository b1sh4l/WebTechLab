<?php
$myfile = fopen("h3h3.txt", "w") or die("Unable to open file!");
$txt = "Good Morning\n";
fwrite($myfile, $txt);
$txt = "Dhaka!\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile1 = fopen("h3h3.txt", "a") or die("Unable to open file!");
$txt1 = "16 June 2022\n";
fwrite($myfile1, $txt1);
fclose($myfile1);

$myfile1 = fopen("h3h3.txt","r") or die("cannot open the file!");
echo fread($myfile1, filesize("h3h3.txt"));
fclose($myfile1);
?>

