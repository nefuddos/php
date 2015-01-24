使用php连接mysql数据库的方法：常用mysqli 和 PDO
<?php
// mysqli
echo "<br>this vars to mysqli\t";
$mysqli = new mysqli("localhost", "wordpress", "123456", "test");
$result = $mysqli->query("SELECT * from test");
$row = $result->fetch_assoc();
echo htmlentities($row['name']);

// PDO
echo "<br>this vars to pdo\t";
$pdo = new PDO('mysql:host=localhost;dbname=test', 'wordpress', '123456');
$statement = $pdo->query("SELECT * from test");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['name']);
echo "<br>";
// mysql
echo "<br>this vars to mysql\t";
$c = mysql_connect("localhost", "wordpress", "123456");
mysql_select_db("test");
$result = mysql_query("SELECT * from test");
$row = mysql_fetch_assoc($result);
echo htmlentities($row['name']);
echo "<br>";
?> 