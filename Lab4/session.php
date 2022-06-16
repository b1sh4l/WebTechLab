<? php 
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php 
$_SESSION["favcolor"] = "red";
$_SESSION["favanimal"] = "dog";
echo "session varibales are set";
?>
</body>
</html>


