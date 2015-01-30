<?php

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}
?>

<p>
Hello visitor, you have seen this page <?php echo $_SESSION['count']; ?> times.
</p>

<?php
if(htmlspecialchars(SID) == "") 
echo "the SID is empty";
else
echo ("the SID isn't empty");
?>

<p>
To continue, <a href="index.php?<?php echo htmlspecialchars(SID); ?>">click
here</a>.
</p> 
