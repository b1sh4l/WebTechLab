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
    <title>Validation Output</title>
</head>

<body>
<?php
//echo "yes!!!";
        $username=isset($_POST["uname"]) ? $_POST["uname"] : "";
	    $gender=isset($_POST["gender"]) ? $_POST["gender"] : "";
	    $skills=isset($_POST["skills"]) ? $_POST["skills"] : "";
	    $department=isset($_POST["dept"]) ? $_POST["dept"] : "";
	    $address=isset($_POST["address"]) ? $_POST["address"] : "";

	    echo "Username: ".$username."<br>";
	    echo "Gender: ".$gender."<br>";
	    echo "Department: ".$department."<br>";
	    echo "Address: ".$address."<br>";
	    echo "Skills: ";
	    foreach($_POST['skills'] as $value)
	    {
	    	echo $value.'<br>';
        }
	    
?>
</body>
</html>