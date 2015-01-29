<?php
echo "this is the page1 content<br>";
// Print an individual cookie
echo $_COOKIE["TestCookie0"];
//echo $HTTP_COOKIE_VARS["TestCookie1"];
echo "<br>";
// Another way to debug/test is to view all cookies
print_r($_COOKIE);
?> 