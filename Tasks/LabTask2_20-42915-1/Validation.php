<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>
    <title>Validation</title>
</head>

<body>
<?php
$isPost=false;
$username = $password = $gender = $skills = $department = $address = "";

if(isset($_POST["btnlogin"]))
{
	$isPost=true;
	if($_POST["uname"]!="" && $_POST["pass"]!="" && $_POST["gender"]!="" && $_POST["skills"]!="" && $_POST["dept"]!="" && $_POST["address"]!="")
		$username=$_POST["uname"];
	    $password=$_POST["pass"];
	    $gender=$_POST["gender"];
	    $skills=$_POST["skills"];
	    $department=$_POST["dept"];
	    $address=$_POST["address"];
	//echo "button clicked!";
}
?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $gender=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python
<?php
if($isPost==true && $skills=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
<?php
if($isPost==true && $dept=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
</select>
<br><br>
Address:<textarea name="address" rowspan="3" colspan="2"></textarea>
<?php
if($isPost==true && $address=="")
{
	echo "<span style='color:red;'><small>Required</small></span>";
}
?>
<br><br>
<input type="submit" value="Log in" name="btnlogin">
</form>
</body>
</html>