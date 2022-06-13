<?php 
echo "<h2>Welcome to the second page</h2><br>";

//$a = $_GET["amount"];
echo "The actual balance is ".($_GET["amount"]*2)."<br>";
echo "The encrypted balance is ".($_GET["amount"])."<br>";


?>