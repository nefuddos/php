<?php
	print("the effective of cookies<br>");
	//print("");
$value = 'something from somewhere';

setcookie("TestCookie0", $value);
setcookie("TestCookie1", $value, time()+3600);  /* expire in 1 hour */

?>
<a href = "./page1.php">go to the page1</a><br>
<a href = "./page2.php">go to the page2</a>