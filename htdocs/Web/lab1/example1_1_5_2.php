
<?php

require("../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});

$variable=$_GET['formvariable'];
echo $variable;
?>
<html>
<head>
<title>Приклад форми get</title>
</head>
<body>
<form action="example1_1_5_2.php" method="get">
<input type="text" name="formvariable">
<input type="submit" value="Додати">
</form>
</body>
</html>
